<?php

class Model_Services extends Model
{
    public $table = 'services';

    public function get_data()
    {
        return $this->get();
    }

}