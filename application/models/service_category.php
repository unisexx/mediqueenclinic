<?php
class Service_category extends ORM
{
	public $table = "service_categories";

	public $has_many = array('service');

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
