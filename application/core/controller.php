<?php

class Controller {
	
	public $model;
	public $view;

    /**
     * @var Middleware array
     */
	public $middleware = [];
	
	function __construct()
	{
		$this->view = new View();
		$this->checkMiddlewares();
	}

	private function checkMiddlewares()
    {
        /** @var Middleware $middleware */
        foreach ($this->middleware as $middleware){
            if (!$middleware->handle()){
                Route::ErrorPage404();
            }
        }
    }

	function action_index()
	{
		// todo	
	}
}
