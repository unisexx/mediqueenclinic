<?php
class Promotion_image extends ORM
{
	public $table = "promotion_images";

	public $has_one = array("promotion");

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
