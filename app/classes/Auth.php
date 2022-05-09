<?php

namespace App\Classes;

class Auth
{
    protected $email;
    protected $password;
    protected $authEmail;
    protected $authPassword;

    public function __construct( $post = null )
    {
        if ( $post )
        {
            $this->email = $post['email'];
            $this->password = $post['password'];
        }

    }

    public function login()
    {
        $this->authEmail = 'pranto@gmail.com';
        $this->authPassword = '123456';

        if ( $this->authEmail == $this->email && $this->authPassword == $this->password )
        {
            session_start();
            $_SESSION['id'] = rand( 10, 1000 );
            header( 'Location:action.php?pages=home' );
        }
        else
        {
            return 'Sorry..../vaia abar try koren.';
        }
    }

    public function logout()
    {
        session_start();
        unset( $_SESSION['id'] );
        header( 'Location: action.php?pages=login' );
    }
}