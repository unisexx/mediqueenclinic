<?php
class Article_categories extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new article_category();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('article_category/index',$data);
	}

	function form($id=false){
		$data['rs'] = new article_category($id);
		$this->template->build('article_category/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new article_category($id);
			
			if($_FILES['img_th']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/article_category','img_th');
				}
				$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/article_category/');
			}
			
			if($_FILES['img_en']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/article_category','img_en');
				}
				$_POST['img_en'] = $rs->upload($_FILES['img_en'],'uploads/article_category/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/article_categories');
	}

	function delete($id){
		if($id){
			$rs = new article_category($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/article_categories');
	}

}
?>
