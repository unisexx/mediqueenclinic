<?php
class Promotions extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new promotion();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page(10);
		$this->template->build('promotion/index',$data);
	}

	function form($id=false){
		$data['rs'] = new promotion($id);
		$this->template->build('promotion/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new promotion($id);
			
			if($_FILES['imgUpload']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/promotion','imgUpload');
				}
				$_POST['image'] = $rs->upload($_FILES['imgUpload'],'uploads/promotion/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/promotions');
	}

	function delete($id){
		if($id){
			$rs = new promotion($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/promotions');
	}

}
?>
