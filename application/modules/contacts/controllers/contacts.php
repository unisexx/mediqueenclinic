<?php
class Contacts extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new contact();
		$data['rs'] = $data['rs']->order_by('id','desc')->limit(1)->get();
		$this->template->build('index',$data);
	}

	function save(){
		if(!empty($_POST['captcha']) && $_POST['captcha']==$_SESSION['captcha'])
		{
			$rs = new message();
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}else{
			set_notify('error','กรุณากรอกตัวเลขให้ตรงกับภาพค่ะ');
		}
		redirect('contacts');
	}

}
?>
