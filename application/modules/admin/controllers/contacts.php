<?php
class Contacts extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new contact();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('contact/index',$data);
	}

	function form($id=false){
		$data['rs'] = new contact($id);
		$this->template->build('contact/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new contact($id);
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/contacts/form/1');
	}

	function delete($id){
		if($id){
			$rs = new contact($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/contacts');
	}

}
?>
