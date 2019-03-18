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
		$captcha = $this->session->userdata('captcha');
		if(($_POST['captcha'] == $captcha) && !empty($captcha)){
			$rs = new message();
			$rs->from_array($_POST);
			$rs->save();
			set_notify('success', 'ขอบคุณสำหรับข้อความ กรุณารอการตอบกลับจากเจ้าหน้าที่ค่ะ');
		}else{
			set_notify('error','กรุณากรอกรหัสให้ตรงกับภาพค่ะ');
		}
		redirect('contacts');
	}

}
?>
