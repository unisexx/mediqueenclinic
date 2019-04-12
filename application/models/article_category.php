<?php
class Article_category extends ORM
{
	public $table = "article_categories";

	public $has_many = array('article');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
