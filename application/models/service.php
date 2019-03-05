<?php
class Service extends ORM
{
	public $table = "services";

	public $has_one = array('service_category');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
