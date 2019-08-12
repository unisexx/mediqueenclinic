<?php
class Review_category extends ORM
{
	public $table = "review_categories";

	public $has_many = array('review');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
