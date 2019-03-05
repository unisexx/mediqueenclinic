<?php
class Services extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new service();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page(10);
		$this->template->build('service/index',$data);
	}

	function form($id=false){
		$data['rs'] = new service($id);
		$this->template->build('service/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new service($id);
			
			if($_FILES['imgUpload']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/service','imgUpload');
				}
				$_POST['image'] = $rs->upload($_FILES['imgUpload'],'uploads/service/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/services');
	}

	function delete($id){
		if($id){
			$rs = new service($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/services');
	}

}
?>
