<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
    <title>Customers | TSF Bank</title>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex justify-content-between">
  
        <div class="logo">
          
           <h1><a href="../index.php">The Sparks Foundation Bank</a></h1> 
          <!--<a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
  
      </div>
    </header><!-- #header -->
    
    <main id="main">
    
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Customers</h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li>View All Customers</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="row ">   
        <div class="col-sm-12" id="PrintData">
              <!------List of all customers-->
              <div class="container">
                <table class="table table-striped table-bordered" style=" margin-top:-16%;">
                        
                        <thead class="table-info">
                          <tr>
                            <th scope="col">Sr.no</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Account No</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Operation</th>

                          </tr>
                        </thead>
                        <tbody>
                <?php

                require("../backend/connection.php");

                $query = "SELECT * FROM customerdata";
                $result=mysqli_query($conn,$query);
                $i=1;

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                  
                    
                    
                    
                      <tr>
                        <th scope="row"><?php echo $i++ ;  ?></th>
                        <td><?php echo "$row[first_name] $row[last_name]" ?></td>
                        <td><?php echo "$row[account_no]" ?></td>
                        <td><?php echo "$row[balance]" ?></td>
                        <td><a href="../transfer/dashboard.php"> <button class="btn btn-outline-dark btn">Transfer</button></a></td> 
                      </tr><br>
                    
                    
                  <?php
                }
                ?>
                </tbody>
                  </table>
              </div>        
        </div>
        <div class="input-group justify-content-center">
          <button class="btn btn-outline-primary" type="button" onclick="printDiv('PrintData')" > Print</button>
        </div>  
      </div>

     <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!---------Download list----->
  <script>
        function printDiv(PrintData) {
            var printContents = document.getElementById("PrintData").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
          }
      </script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>
