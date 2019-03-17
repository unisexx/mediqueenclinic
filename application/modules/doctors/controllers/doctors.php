<?php
class Doctors extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new doctor();
		$data['rs'] = $data['rs']->order_by('id','desc')->get_page(3);
		$this->template->build('index',$data);
	}

}
?>
