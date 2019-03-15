<?php
class Review_image_detail extends ORM
{
	public $table = "review_image_details";

	public $has_one = array("review_image");

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
