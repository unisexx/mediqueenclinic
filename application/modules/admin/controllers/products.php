<?php
class Products extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new product();
		if(@$_GET['search']){
			$data['rs']->where('name LIKE "%'.$_GET['search'].'%"');
		}

		$data['rs']->order_by('id','desc')->get_page(10);
		$this->template->build('product/index',$data);
	}

	function form($id=false){
		$data['rs'] = new product($id);
		$this->template->build('product/form',$data);
	}

	function save($id=false){
		if($_POST){

			$rs = new product($id);
			
			if($_FILES['imgUpload']['name'])
			{
				if($rs->id){
					$rs->delete_file($rs->id,'uploads/product','imgUpload');
				}
				$_POST['image'] = $rs->upload($_FILES['imgUpload'],'uploads/product/');
			}
			
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('admin/products');
	}

	function delete($id){
		if($id){
			$rs = new product($id);
			$rs->delete();
			set_notify('success', 'ลบข้อมูลเรียบร้อย');
		}
		redirect('admin/products');
	}

}
?>
