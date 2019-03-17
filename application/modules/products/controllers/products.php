<?php
class Products extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['rs'] = new service_category();
		$data['rs'] = $data['rs']->order_by('id','asc')->get();

		$data['products'] = new product();
		$data['products'] = $data['products']->order_by('id','desc')->get_page(9);

		$this->template->build('index',$data);
	}

	function view($id){
		$data['rs'] = new service_category();
		$data['rs'] = $data['rs']->order_by('id','asc')->get();

		$data['products'] = new product($id);

		$this->template->build('view',$data);
	}

}
?>
