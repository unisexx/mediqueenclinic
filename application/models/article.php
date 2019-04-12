<?php
class Article extends ORM
{
	public $table = "articles";

	public $has_one = array('article_category');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
