<?php
class Reviews extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new review();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('reviews/index',$data);
	}

	function form($id=false){
		$data['rs'] = new review($id);
		$this->template->build('reviews/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new review($id);
			
			if($_FILES['img_th']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/review','img_th');
				}
				$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/review/');
			}
			
			if($_FILES['img_en']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/review','img_en');
				}
				$_POST['img_en'] = $rs->upload($_FILES['img_en'],'uploads/review/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/reviews');
	}

	function delete($id){
		if($id){
			$rs = new review($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/reviews');
	}

}
?>
