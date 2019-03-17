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

}
?>
