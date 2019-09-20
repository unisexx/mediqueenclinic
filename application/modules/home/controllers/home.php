<?php
class Home extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->template->set_layout('home');

		$data['popup'] = new popup();
		$data['popup'] = $data['popup']->where('status','public')->order_by('id','desc')->limit(1)->get();

		$data['contact'] = new contact();
		$data['contact'] = $data['contact']->order_by('id','desc')->limit(1)->get();

		$data['hilight'] = new hilight();
		$data['hilight'] = $data['hilight']->where('status','public')->order_by('id','desc')->get();

		$data['service_category'] = new service_category();
		$data['service_category'] = $data['service_category']->where('status','public')->order_by('id','asc')->get();

		$data['promotion_list'] = new promotion_list();
		$data['promotion_list'] = $data['promotion_list']->where('status','public')->order_by('id','asc')->limit(1)->get();

		$data['promotion_hilight'] = new promotion_hilight();
		$data['promotion_hilight'] = $data['promotion_hilight']->where('status','public')->order_by('id','desc')->get();

		$data['doctor'] = new doctor();
		$data['doctor'] = $data['doctor']->where('status','public')->order_by('id','desc')->get();

		$data['review_fb'] = new review_fb();
		$data['review_fb'] = $data['review_fb']->where('status','public')->order_by('id','desc')->get();

		$data['review_image'] = new review_image();
		$data['review_image'] = $data['review_image']->where('status','public')->order_by('id','desc')->limit(1)->get();

		$data['review_video'] = new review_video();
		$data['review_video'] = $data['review_video']->where('status','public')->order_by('id','desc')->get();

		$data['review'] = new review();
		$data['review'] = $data['review']->where('status','public')->order_by('id','desc')->get();

		$this->template->build('index',$data);
	}

	public function lang($lang)
	{
		$this->load->library('user_agent');
		$this->session->set_userdata('lang',$lang);

		redirect($this->agent->referrer());
	}

	function info(){
		// phpinfo();
	}
}
