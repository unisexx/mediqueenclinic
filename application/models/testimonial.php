<?php
class Testimonial extends ORM
{
	public $table = "testimonials";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
