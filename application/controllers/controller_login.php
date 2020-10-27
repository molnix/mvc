<?php

class Controller_Login extends Controller
{
    function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}
    
	function action_index()
	{
        $data['users'] = $this->model->get_data();

        if(isset($_POST['login']) && isset($_POST['password'])){
            $login = $_POST['login'];
            $password = $_POST['password'];
            
            foreach($data['users'] as $rows){
                if($rows['login'] == $login && $rows['password'] == $password){
                    session_start();
                    $_SESSION['idUser'] = $rows['idUser'];
                    $data['errors'] = "Вы вошли";
                }
                else{
                    $data['errors'] = "Неверно введены данные";
                }
            }
        }

		$this->view->generate('login_view.php', 'template_view.php', $data);
	}
}
