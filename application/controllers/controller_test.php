<?php

class Controller_Test extends Controller
{
    public function action_index()
    {
        $this->view->generate(
            'hello_view.php',
            'template_view.php',
            [
                'name' => 'Khpk123',
                'date' => date('Y:m:d'),
                'users' => [
                    'user1',
                    'user2',
                    'user3',
                    'user4',
                    'user5'
                ]
            ]
        );
    }

    public function action_khpk()
    {
        var_dump('khpk');
    }
}