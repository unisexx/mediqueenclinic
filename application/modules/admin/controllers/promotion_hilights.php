<?php
class Promotion_hilights extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new promotion_hilight();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('promotion_hilight/index',$data);
	}

	function form($id=false){
		$data['rs'] = new promotion_hilight($id);
		$this->template->build('promotion_hilight/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new promotion_hilight($id);
			
			if($_FILES['img_th']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/promotion_hilight','img_th');
				}
				$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/promotion_hilight/');
			}
			
			if($_FILES['img_en']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/promotion_hilight','img_en');
				}
				$_POST['img_en'] = $rs->upload($_FILES['img_en'],'uploads/promotion_hilight/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/promotion_hilights');
	}

	function delete($id){
		if($id){
			$rs = new promotion_hilight($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/promotion_hilights');
	}

}
?>
