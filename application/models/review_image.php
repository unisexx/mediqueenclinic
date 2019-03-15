<?php
class Review_image extends ORM
{
	public $table = "review_images";

	public $has_many = array("review_image_detail");

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
