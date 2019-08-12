<?php
class Reviews extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function categories(){
		$data['rs'] = new review_category();
		$data['rs'] = $data['rs']->where('status','public')->order_by('id','desc')->get_page(10);
		$this->template->build('review_category',$data);
	}

	function view($id){
		$data['rs'] = new review($id);
		$this->template->build('view',$data);
	}

	// function index()
	// {
	// 	$data['rs'] = new review();
	// 	$data['rs'] = $data['rs']->where('status','public')->order_by('id','desc')->get_page(3);
	// 	$this->template->build('index',$data);
	// }

}
?>
