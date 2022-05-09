<?php
session_start();
if ( !isset( $_SESSION['id'] ) )
{
    header( 'Location:action.php?pages=login' );
}

?>


<?php include 'pages/includes/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- <div class="card">
                <div class="card-body">
                    <h2>
                        <?php //session_start();
//echo $_SESSION['city'];
?>
                    </h2>
                </div>
            </div> -->
            <?php foreach ( $students as $student )
{
    ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $student['image']; ?>" alt="student image" class="card-img-top"
                        style="height:250px;">
                    <div class="card-body">
                        <h2><?php echo $student['name']; ?></h2>
                        <p><?php echo $student['email']; ?></p>
                        <p><?php echo $student['phone']; ?></p>
                        <a href="javascript:void(0)" class="btn btn-outline-success float-right">view</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php';?>