<?php
class Abouts extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new about();
		$data['rs'] = $data['rs']->order_by('id','desc')->limit(1)->get();
		$this->template->build('index',$data);
	}

}
?>
