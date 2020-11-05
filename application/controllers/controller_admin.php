<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/application/middleware/AdminMiddleware.php';
class Controller_Admin extends Controller
{
    function __construct()
    {
        $this->middleware[] = new AdminMiddleware();
        parent::__construct();
    }

	function action_index()
	{
	    $this->view->generate('admin_view.php', 'template_view.php');
    }


}