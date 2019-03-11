<?php
class Promotion_lists extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new promotion_list();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page(10);
		$this->template->build('promotion_list/index',$data);
	}

	function form($id=false){
		$data['rs'] = new promotion_list($id);
		$this->template->build('promotion_list/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new promotion_list($id);
			
			if($_FILES['imgUpload']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/promotion_list','imgUpload');
				}
				$_POST['image'] = $rs->upload($_FILES['imgUpload'],'uploads/promotion_list/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/promotion_lists');
	}

	function delete($id){
		if($id){
			$rs = new promotion_list($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/promotion_lists');
	}

}
?>
