<?php
class Articles extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new article();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('articles/index',$data);
	}

	function form($id=false){
		$data['rs'] = new article($id);
		$this->template->build('articles/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new article($id);
			
			if($_FILES['img_th']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/article','img_th');
				}
				$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/article/');
			}
			
			if($_FILES['img_en']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/article','img_en');
				}
				$_POST['img_en'] = $rs->upload($_FILES['img_en'],'uploads/article/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/articles');
	}

	function delete($id){
		if($id){
			$rs = new article($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/articles');
	}

}
?>
