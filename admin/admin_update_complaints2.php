<!DOCTYPE html>
<html>

<head>
    <?php
    session_start();
    if(!isset($_SESSION['x'])||!isset($_SESSION['admin_id']))
        header("location:admin_login.php");

        
    if(isset($_POST['update'])){

        include "dbconnect.php";

        $status=$_POST['updatedstatus'];
        $id=$_SESSION['cid_update'];
        
        $query="UPDATE complaint SET status = '$status' WHERE c_id = '$id' ";
        $res=mysqli_query($conn,$query);
        
        if($res!=1)
        {
            $message1 = "Updation not Success!";
            echo "<script type='text/javascript'>alert('$message1');</script>";
        }
        else
        {
          $message = "Status Updated Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
    
    
        
    }
    
    ?>

    <title>Update Complaints</title>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">
    <style>
        body {
            background-color: #343a40;
            /* Dark background color */
            color: #fff;
            /* Text color */
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.6);
            /* Semi-transparent background for the form */
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
            max-width: 800px;
            margin-top: 120px;
            /* Adjust as needed for vertical centering */
        }
    </style>

</head>


<body style="background-color: #dfdfdf">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="alogout.php"><b>Safecity Solutions</b></a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="alogout.php">Admin Login</a></li>
                    <li class="active"><a href="admin_interface.php">Admin Home</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="admin_update_complaints2.php">Update Complaints</a></li>
                    <li><a href="alogout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>





    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-md-12">
                <div class="form-container">
                    <h2 class="text-center">Update Complaint for C_ID:
                        <?php echo "{$_SESSION['cid_update']}";  ?>
                    </h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label style="margin-bottom: 20px;" for="description">Current Status:</label>
                            <input style="margin-bottom: 20px;" type="text" class="form-control" name="updatedstatus"
                                placeholder="Enter Current Status">
                        </div>
                        <button style="margin-bottom: 20px;" type="submit" class="btn btn-primary"
                            name="update">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
        <h4 style="color: white;">&copy <b>Safecity Solutions 2023</b></h4>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>