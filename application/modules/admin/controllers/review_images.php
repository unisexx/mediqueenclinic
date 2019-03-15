<?php
class Review_images extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new review_image();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page(10);
		$this->template->build('review_image/index',$data);
	}

	function form($id=false){
		$data['rs'] = new review_image($id);
		$this->template->build('review_image/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new review_image($id);
			$rs->from_array($_POST);
			$rs->save();
			$last_id = $rs->id;

			// ลบทั้งหมดแล้วบันทึกใหม่
			$this->db->delete('review_image_details', array('review_image_id' => $last_id)); 

			fix_file($_FILES['filUpload']);
			foreach($_FILES['filUpload'] as $key => $image)
			{
				$picture = new review_image_detail(@$_POST['picture_id'][$key]);
				if($image['name'])
				{
					$picture->image = $picture->upload($image,'uploads/review_image/'.$last_id);
					$picture->review_image_id = $last_id;
					$picture->save();
				}
			}

			if(isset($_POST['oldImage'])){
				foreach($_POST['oldImage'] as $key=>$item){
					$p                    = new review_image_detail();
					$p->review_image_id = $last_id;
					$p->image             = $item;
					$p->save();
				}
			}
			
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/review_images');
	}

	function delete($id){
		if($id){
			$rs = new review_image($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/review_images');
	}

}
?>
