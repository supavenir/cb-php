<?php

namespace App\middleware;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;
use Pecee\SimpleRouter\Router;
use Pecee\SimpleRouter\SimpleRouter;

class Auth implements IMiddleware
{
    const USER_KEY="activeUser";

    public function handle(Request $request): void
    {
     $user=$_SESSION[self::USER_KEY]??null;
     if($user==null){
         SimpleRouter::response()->redirect('/login');
     }
    }
}