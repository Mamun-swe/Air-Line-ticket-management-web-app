
<?php
    session_start();
    ob_start();

    if($_SESSION['userid']){
        $sessionId = $_SESSION['userid'];
        include ('../server/admin/add-package.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/add-package.css">
    <title>Add Package</title>
</head>

<body>

    <div class="main">
        <?php
            include('nav.php');
        ?>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-6 m-auto">
                    <div class="card rounded-0 border-0">
                        <div class="card-header border-0 rounded-0 text-center pt-5">
                            <h3 class="h3-responsive">Add New Package</h3>
                            <p class="text-success"><?php echo $success; ?></p>
                        </div>
                        <div class="card-body px-1">

                        <form method="post">
                            <div class="form-group mb-2">
                                <small class="text-danger"><?php echo $nameErr; ?></small>
                                <input type="text" name="packagename" class="form-control" placeholder="Package name">
                            </div>
                            <div class="form-group mb-2">
                                <small class="text-danger"><?php echo $disciptionErr; ?></small>
                                <textarea name="discription" class="form-control" rows="3" placeholder="Package Discription"></textarea>
                            </div>
                            
                            <a href="dashboard.php" type="button" class="btn btn-danger float-right rounded-0 shadow-none py-1 px-3">Cancle</a>
                            <button type="submit" name="savePackage" class="btn btn-primary float-right rounded-0 shadow-none py-1 px-3 mr-1">Save Package</button>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

<?php
    }else{
        header('location:  index.php');
    }
?>