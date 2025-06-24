<?php 
include("connection.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            display: flex;
            padding: 0 35px;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url('wallpaper2.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Insert your Information</h4>
                    </div>
                    <div class="card-body">

                        <form action="code_two.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Room</label>
                                <input type="text" name="nameR"  class="form-control" value="Room 2" disabled='disabled'/>
                                <input type="hidden" name="nameR" class="form-control" value="<?php echo $nameR; ?>"/>
                            </div>
                        <div class="form-group mb-3">
                                <label for="">Firstame</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Lastname</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Use for</label>
                                <input type="text" name="use_for" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Start</label>
                                <input type="datetime-local" name="time_start" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">End</label>
                                <input type="datetime-local" name="time_end" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="save_datetime" class="btn btn-primary">Save Booking</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>