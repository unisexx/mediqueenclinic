<?php
class Services extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$rs = new service_category();
		$rs = $rs->order_by('id','asc')->limit(1)->get();
		redirect('services/category/'.$rs->id);
	}

	function category($id=false){
		$data['category_id'] = $id;

		$data['rs'] = new service_category();
		$data['rs'] = $data['rs']->order_by('id','asc')->get();

		$data['services'] = new service();
		$data['services'] = $data['services']->where('service_category_id = '.$id)->get();
		$this->template->build('category',$data);
	}

}
?>
