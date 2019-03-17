<?php
class Testimonials extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new testimonial();
		$data['rs'] = $data['rs']->order_by('id','desc')->get_page(6);
		$this->template->build('index',$data);
	}

}
?>
