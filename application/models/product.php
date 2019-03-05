<?php
class Product extends ORM
{
	public $table = "products";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
