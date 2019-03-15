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
			$rs->from_array($_POST);
			$rs->save();
			$last_id = $rs->id;

			// ลบทั้งหมดแล้วบันทึกใหม่
			$this->db->delete('promotion_list_details', array('promotion_list_id' => $last_id)); 

			if(isset($_POST['name_th'])){
				foreach($_POST['name_th'] as $key=>$item){
					$p                    = new promotion_list_detail();
					$p->promotion_list_id = $last_id;
					$p->title_th          = $_POST['name_th'][$key];
					$p->title_en          = $_POST['name_en'][$key];
					$p->price             = $_POST['price'][$key];
					$p->save();
				}
			}
			
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
