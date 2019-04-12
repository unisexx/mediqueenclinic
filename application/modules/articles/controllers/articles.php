<?php
class Articles extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		// $data['rs'] = new article();
		// $data['rs'] = $data['rs']->where('status','public')->order_by('id','desc')->get_page(10);
		// $this->template->build('index',$data);

		$rs = new article_category();
		$rs = $rs->order_by('id','asc')->limit(1)->get();
		redirect('articles/category/'.$rs->id);
	}

	function category($id=false){
		$data['category_id'] = $id;

		// $data['rs'] = new article_category();
		// $data['rs'] = $data['rs']->where('status','public')->order_by('id','asc')->get();

		$data['article_category'] = new article_category();
		$data['article_category'] = $data['article_category']->where('status','public')->order_by('id','asc')->get();

		$data['articles'] = new article();
		$data['articles'] = $data['articles']->where('status','public')->where('article_category_id = '.$id)->get();
		$this->template->build('index',$data);
	}

}
?>
