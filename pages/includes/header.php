<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serise Count mini app</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <style>
    .mt-custom {
        margin-top: 130px;
    }
    </style>

</head>

<body>

    <?php if ( isset( $_SESSION['id'] ) )
{
    ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="action.php?pages=home" class="navbar-brand">Logo
            </a>
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a href="action.php?pages=home" class="nav-link">File Upload</a>
                </li>
                <li class="nav-item"><a href="action.php?pages=view-students" class="nav-link">View Student</a>
                </li>
                <li class="nav-item"><a href="action.php?pages=logout" class="nav-link">Logout</a>
                </li>


            </ul>
        </div>
    </nav>

    <?php }?>