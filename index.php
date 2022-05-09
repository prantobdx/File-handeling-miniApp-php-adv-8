<?php

// session_start();

// echo session_id();

// $_SESSION['name'] = 'Mirpur';
// $_SESSION['city'] = 'Dhaka';
// $_SESSION['country'] = 'Bangladesh';
// $_SESSION['mobile'] = '01891975402';

require_once 'vendor/autoload.php';

use App\Classes\Student;

// $home = new Home();
// $home->index();

$student = new Student;
$student->manage();

//  c:23 done.
//  C:24 done.
//  c:25 done.