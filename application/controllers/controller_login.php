<?php
require $_SERVER['DOCUMENT_ROOT'].'/application/services/UserService.php';
class Controller_Login extends Controller
{

    function action_index()
    {
        $userService = new UserService();

        if ($userService->login($_POST['login'], $_POST['password'])) {
            $data["login_status"] = "access_granted";
        } else {
            $data["login_status"] = "access_denied";
        }

        $this->view->generate('login_view.php', 'template_view.php', $data);
    }

}
