<?php
class Ajax extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function changestatus()
	{
		$statusArray = array("true"=>"public", "false"=>"draft");
        $status = $statusArray[$_GET['status']];
		$this->db->query("UPDATE ".$_GET['table']." SET status = '".$status."' where id = ".$_GET['id']);
	}
}
?>
