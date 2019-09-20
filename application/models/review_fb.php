<?php
class Review_fb extends ORM
{
	public $table = "review_fbs";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
