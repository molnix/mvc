<?php

require_once 'Middleware.php';
require $_SERVER['DOCUMENT_ROOT'].'/application/services/UserService.php';

class AdminMiddleware implements Middleware
{
    public function handle():bool
    {
            $userService = new UserService();
            return $userService->isAuth();
    }
}