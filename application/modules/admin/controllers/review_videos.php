<?php
class Review_videos extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new review_video();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page();
		$this->template->build('review_video/index',$data);
	}

	function form($id=false){
		$data['rs'] = new review_video($id);
		$this->template->build('review_video/form',$data);
	}

	function save($id=false){
		if($_POST){
			$rs = new review_video($id);
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/review_videos');
	}

	function delete($id){
		if($id){
			$rs = new review_video($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/review_videos');
	}

}
?>
