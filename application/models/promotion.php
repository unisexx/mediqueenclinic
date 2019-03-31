<?php
class Promotion extends ORM
{
	public $table = "promotions";

	public $has_many = array("promotion_image");

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
