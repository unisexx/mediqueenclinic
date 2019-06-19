<?php
class Services extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index($slug=false)
	{
		$rs = new service_category();
		if($slug){
			$rs = $rs->where('slug',$slug)->limit(1)->get();
		}else{
			$rs = $rs->order_by('id','asc')->limit(1)->get();
		}

		$service = new service();
		$service = $service->where('status','public')->where('service_category_id = '.$rs->id)->order_by('id','asc')->get(1);

		redirect('services/category/'.$rs->slug.'/'.$service->id);
	}

	function category($slug=false,$service_id=false){
		$data['slug'] = $slug;
		
		$data['rs'] = new service_category();
		$data['rs'] = $data['rs']->where('status','public')->order_by('id','asc')->get();

		$service_category = new service_category();
		$service_category = $service_category->where('status','public')->where('slug',$slug)->get()->limit(1);

		// หัวข้อบทความฝั่งขวา
		$data['services'] = new service();
		$data['services'] = $data['services']->where('status','public')->where('service_category_id = '.$service_category->id)->get();

		//เนื้อหาบทความฝั่งขวา
		$data['service'] = new service($service_id);

		$this->template->build('category',$data);
	}

}
?>
