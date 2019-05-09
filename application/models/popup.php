<?php
class Popup extends ORM
{
	public $table = "popups";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
