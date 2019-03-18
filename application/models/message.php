<?php
class Message extends ORM
{
	public $table = "messages";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
