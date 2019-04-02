<?php
class Articles extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new article();
		$data['rs'] = $data['rs']->where('status','public')->order_by('id','desc')->get_page(10);
		$this->template->build('index',$data);
	}

}
?>
