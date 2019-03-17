<?php
class Abouts extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new about(1);
		$this->template->build('index',$data);
	}

}
?>
