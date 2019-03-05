<?php
class Doctor extends ORM
{
	public $table = "doctors";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
