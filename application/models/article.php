<?php
class Article extends ORM
{
	public $table = "articles";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
