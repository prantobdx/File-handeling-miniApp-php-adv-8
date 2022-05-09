<?php

require_once 'vendor/autoload.php';

use App\Classes\Auth;
use App\Classes\StudentInfo;

if ( isset( $_GET['pages'] ) )
{
    if ( $_GET['pages'] == 'home' )
    {
        include 'pages/home.php';
    }
    elseif ( $_GET['pages'] == 'view-students' )
    {
        $fileInfo = new StudentInfo();
        $students = $fileInfo->getAllStudentInfo();
        include 'pages/viewStudents.php';
    }
    elseif ( $_GET['pages'] == 'login' )
    {
        include 'pages/login.php';
    }
    elseif ( $_GET['pages'] == 'logout' )
    {
        $auth = new Auth();
        $auth->logout();
    }
}
elseif ( isset( $_POST['btn'] ) )
{
    $fileUpload = new StudentInfo( $_POST, $_FILES );
    $message = $fileUpload->index();
    include 'pages/home.php';
}
elseif ( isset( $_POST['loginBtn'] ) )
{
    $auth = new Auth( $_POST );
    $message = $auth->login();
    include 'pages/login.php';
}