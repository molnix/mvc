<?php

class Model_Login extends Model
{

    public $table = 'users';
	
	public function get_data()
	{
        return $this->get();
	}

}