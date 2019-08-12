<?php
class Review_categories extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new review_category();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('review_category/index',$data);
	}

	function form($id=false){
		$data['rs'] = new review_category($id);
		$this->template->build('review_category/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new review_category($id);
			
			// if($_FILES['img_th']['name'])
			// {
			// 	if($rs->id){
			// 		$rs->delete_file($rs->id,'uploads/review_category','img_th');
			// 	}
			// 	$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/review_category/');
			// }
			
			// if($_FILES['img_en']['name'])
			// {
			// 	if($rs->id){
			// 		$rs->delete_file($rs->id,'uploads/review_category','img_en');
			// 	}
			// 	$_POST['img_en'] = $rs->upload($_FILES['img_en'],'uploads/review_category/');
			// }
			
			$_POST['slug'] = clean_url($_POST['name_en']);
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/review_categories');
	}

	function delete($id){
		if($id){
			$rs = new review_category($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/review_categories');
	}

}
?>
