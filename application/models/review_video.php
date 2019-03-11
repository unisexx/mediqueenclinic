<?php
class Review_video extends ORM
{
	public $table = "review_videos";

	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>
