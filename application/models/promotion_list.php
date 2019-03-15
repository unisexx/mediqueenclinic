<?php
class Promotion_list extends ORM
{
	public $table = "promotion_lists";

	public $has_many = array("promotion_list_detail");

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
