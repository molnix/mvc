<?php


class controller_admin_services extends Controller
{
    

    function action_index()
    {
        $this->view->generate('service/admin_services.php', 'template_view.php');
    }