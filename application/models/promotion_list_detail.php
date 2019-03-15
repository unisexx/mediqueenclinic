<?php
class Promotion_list_detail extends ORM
{
	public $table = "promotion_list_details";

	public $has_one = array("promotion_list");

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
