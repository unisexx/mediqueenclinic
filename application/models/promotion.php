<?php
class Promotion extends ORM
{
	public $table = "promotions";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
