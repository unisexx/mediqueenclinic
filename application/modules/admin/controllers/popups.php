<?php
class Popups extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new popup();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('popup/index',$data);
	}

	function form($id=false){
		$data['rs'] = new popup($id);
		$this->template->build('popup/form',$data);
	}

	function save($id=false){
		$rs = new popup($id);

		if($_FILES['img_th']['name'])
		{
			if($rs->id){
				$rs->delete_file($rs->id,'uploads/popup','img_th');
			}
			$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/popup/');
		}

		$rs->from_array($_POST);
		$rs->save();
		set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		
		redirect('admin/popups/form/1');
	}

	function delete($id){
		if($id){
			$rs = new popup($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/popups');
	}

}
?>
