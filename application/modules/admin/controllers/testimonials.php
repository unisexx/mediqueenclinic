<?php
class Testimonials extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new testimonial();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page(10);
		$this->template->build('testimonial/index',$data);
	}

	function form($id=false){
		$data['rs'] = new testimonial($id);
		$this->template->build('testimonial/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new testimonial($id);

			if($_FILES['img_th']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/testimonial','img_th');
				}
				$_POST['img_th'] = $rs->upload($_FILES['img_th'],'uploads/testimonial/');
			}
			
			if($_FILES['img_en']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/testimonial','img_en');
				}
				$_POST['img_en'] = $rs->upload($_FILES['img_en'],'uploads/testimonial/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/testimonials');
	}

	function delete($id){
		if($id){
			$rs = new testimonial($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/testimonials');
	}

}
?>
