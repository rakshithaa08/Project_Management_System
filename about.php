<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PROJECT MANAGEMENT SYSTEM</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PROJECT MANAGEMENT SYSTEM</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.php">Project Status</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    




      <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Project Status</h2>
            <div class="container">
 <div class="row">
   <div class="col-sm-8">
    
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th>Student Name</th>
         <th>Project Title</th>
         <th>Project Description</th>
         <th>Faculty Details</th>
         <th>Project Status</th>
        
    </thead>
    <tbody>

       <?php 
       $con=mysqli_connect('localhost','root','');
       mysqli_select_db($con,'test');
       $query = "SELECT * FROM `information`;";
       $result = $con->query($query);
       
       if ($result->num_rows > 0) 
       {
        
        while($row = $result->fetch_assoc())
        {
          ?>
          <tr>
          <td><?php echo $row["Student Name"]; ?></td>
          <td><?php echo $row["Project Title"]; ?></td>
          <td><?php echo $row["Project Description"]; ?></td>
          <td><?php echo $row["Faculty Details"]; ?></td>
          <td><?php echo $row["Project Status"]; ?></td>
        </tr>

           
          
   <?php
        }    
    } 
    ?>
    
      </tbody>
     </table>
   </div>
</div>
</div>
</div>
             </div>
        </div>
      </div>
    </section>

   

    


    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Project Management System 2022</p>
         
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
