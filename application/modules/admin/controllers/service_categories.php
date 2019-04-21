<?php
class Service_categories extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new service_category();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('service_category/index',$data);
	}

	function form($id=false){
		$data['rs'] = new service_category($id);
		$this->template->build('service_category/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new service_category($id);
			
			if($_FILES['img_th']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/service_category','img_th');
				}
				$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/service_category/');
			}
			
			if($_FILES['img_en']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/service_category','img_en');
				}
				$_POST['img_en'] = $rs->upload($_FILES['img_en'],'uploads/service_category/');
			}
			
			$_POST['slug'] = clean_url($_POST['name_en']);
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/service_categories');
	}

	function delete($id){
		if($id){
			$rs = new service_category($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/service_categories');
	}

}
?>
