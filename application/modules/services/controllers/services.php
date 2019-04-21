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
		redirect('services/category/'.$rs->slug);
	}

	function category($slug=false){
		$data['slug'] = $slug;
		
		$data['rs'] = new service_category();
		$data['rs'] = $data['rs']->where('status','public')->order_by('id','asc')->get();

		$service_category = new service_category();
		$service_category = $service_category->where('status','public')->where('slug',$slug)->get()->limit(1);

		$data['services'] = new service();
		$data['services'] = $data['services']->where('status','public')->where('service_category_id = '.$service_category->id)->get();
		$this->template->build('category',$data);
	}

}
?>
