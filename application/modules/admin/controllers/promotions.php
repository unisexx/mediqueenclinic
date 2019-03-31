<?php
class Promotions extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new promotion();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page(10);
		$this->template->build('promotion/index',$data);
	}

	function form($id=false){
		$data['rs'] = new promotion($id);
		$this->template->build('promotion/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new promotion($id);
			$rs->from_array($_POST);
			$rs->save();
			$last_id = $rs->id;

			// ลบทั้งหมดแล้วบันทึกใหม่
			$this->db->delete('promotion_images', array('promotion_id' => $last_id)); 

			fix_file($_FILES['filUpload']);
			foreach($_FILES['filUpload'] as $key => $image)
			{
				$picture = new promotion_image(@$_POST['picture_id'][$key]);
				if($image['name'])
				{
					$picture->image = @$picture->upload($image,'uploads/promotion_image/'.$last_id);
					$picture->promotion_id = $last_id;
					$picture->save();
				}
			}

			if(isset($_POST['oldImage'])){
				foreach($_POST['oldImage'] as $key=>$item){
					$p                    = new promotion_image();
					$p->promotion_id = $last_id;
					$p->image             = $item;
					$p->save();
				}
			}

			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/promotions');
	}

	function delete($id){
		if($id){
			$rs = new promotion($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/promotions');
	}

}
?>
