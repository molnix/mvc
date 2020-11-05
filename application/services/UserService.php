<?php

class UserService {
    private $adminPassword = 'admin';

    private $adminLogin = 'admin';

    public function login ($login, $password)
    {
        if($login == $this -> adminLogin && $password == $this->adminPassword){
            $_SESSION['admin'] = true;
            return true;
        }else{
            return false;
        }
    }
    public function  logout()
    {
        session_destroy();
    }

    public function  isAuth()
    {
        if($_SESSION['admin']){
            return true;
        }else{
            return false;
        }
    }


}
