<!DOCTYPE html>
<html>

<head>
  <?php
    session_start();
    if(!isset($_SESSION['x'])||!isset($_SESSION['admin_id']))
        header("location:admin_login.php");
    
    include "dbconnect.php";
    
    
    $query="select * from complaint order by c_id asc";
    $result=mysqli_query($conn,$query);  
    ?>

  <title>View Complaints</title>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
    type="text/css">


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
          <li class="active"><a href="admin_complaints.php">View Complaints</a></li>
          <li><a href="alogout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>





  <div style="padding:50px; margin: 50px;">
    <table class="table table-bordered" style="table-layout: fixed;">
      <thead class="thead-dark" style="background-color: black; color: white;">
        <tr>
          <th scope="col">Complaint Id</th>
          <th scope="col">User Name</th>
          <th scope="col">User Id</th>
          <th scope="col">Type of Crime</th>
          <th scope="col">Date of Crime</th>
          <th scope="col">Location</th>
          <th scope="col">Description</th>
          <th scope="col">Status</th>
        </tr>
      </thead>

      <?php
      while($rows=mysqli_fetch_assoc($result)){
    ?>

      <tbody style="background-color: white; color: black;">
        <tr>
          <td>
            <?php echo $rows['c_id']; ?>
          </td>
          <td style="text-wrap: normal; word-wrap: break-word;">
            <?php echo $rows['name']; ?>
          </td>
          <td style="text-wrap: normal; word-wrap: break-word;">
            <?php echo $rows['uid']; ?>
          </td>
          <td>
            <?php echo $rows['type_crime']; ?>
          </td>
          <td>
            <?php echo $rows['d_o_c']; ?>
          </td>
          <td>
            <?php echo $rows['location']; ?>
          </td>
          <td style="text-wrap: normal; word-wrap: break-word;">
            <?php echo $rows['description']; ?>
          </td>
          <td style="text-wrap: normal; word-wrap: break-word;">
            <?php echo $rows['status']; ?>
          </td>
        </tr>
      </tbody>

      <?php
    } 
    ?>

    </table>
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