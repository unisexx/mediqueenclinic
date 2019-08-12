<?php
class Review extends ORM
{
	public $table = "reviews";

	public $has_one = array('review_category');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
