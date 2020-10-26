<?php

class Model_Portfolio extends Model
{

    public $table = 'portfolio';
	
	public function get_data()
	{
        return $this->get();
	}

}
