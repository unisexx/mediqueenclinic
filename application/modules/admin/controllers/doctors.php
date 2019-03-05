<?php
class Doctors extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new doctor();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page(10);
		$this->template->build('doctor/index',$data);
	}

	function form($id=false){
		$data['rs'] = new doctor($id);
		$this->template->build('doctor/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new doctor($id);
			
			if($_FILES['imgUpload']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/doctor','imgUpload');
				}
				$_POST['image'] = $rs->upload($_FILES['imgUpload'],'uploads/doctor/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/doctors');
	}

	function delete($id){
		if($id){
			$rs = new doctor($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/doctors');
	}

}
?>
