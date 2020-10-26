<?php

class Controller_My extends Controller
{
	
	function action_index()
	{
        $this->view->generate('my_view.php', 'template_view.php',
        ['lexa' => 'katitsay']
    );
	}

}