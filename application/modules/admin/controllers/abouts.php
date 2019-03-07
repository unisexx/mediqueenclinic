<?php
class Abouts extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new about();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('about/index',$data);
	}

	function form($id=false){
		$data['rs'] = new about($id);
		$this->template->build('about/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new about($id);
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/abouts/form/1');
	}

	function delete($id){
		if($id){
			$rs = new about($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/abouts');
	}

}
?>
