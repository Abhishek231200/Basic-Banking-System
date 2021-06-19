<?php

require_once("../backend/connection.php");

?>
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
    <title>Transfer Money | TSF Bank</title>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex justify-content-between">
  
        <div class="logo">        
           <h1><a href="../index.php">The Sparks Foundation Bank</a></h1> 
        </div>
  
      </div>
    </header><!-- #header -->
    
    <main id="main">
    
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Transfer Funds</h2>
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li>Transfer Money</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

<!-----Account Details Section---->
<section class="inner-page pt-4 m-5">
  <center><h2><b>Customer Details</b></h2></center>
  <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Account Details</button>
          </li>
          
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="transfer-tab" data-bs-toggle="tab" data-bs-target="#transfer" type="button" role="tab" aria-controls="transfer" aria-selected="false">Transfer Funds</button>
          </li>
      </ul>
      <div class="tab-content" id="myTabContent">
          <!--Account details-->
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

              <!---Customer related section--->
              <div class="d-flex align-items-start mt-5">
                    <div class="tab-content" id="v-pills-tabContent">
                            <!--Find customer-->
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <center><h2>Find Account Details</h2></center>
                              <form action="" method="post">
                                <div class="input-group input-group-lg mb-3">
                                  <input type="number" class="form-control" name="accountnum" placeholder="Enter Account Number" aria-label="Recipient's username" aria-describedby="button-addon2">
                                  <button class="btn btn-outline-secondary" name="findcustomer" type="submit" id="button-addon2">Find Details</button>
                                </div>
                              </form>  
                                <?php
                                    if (isset($_POST['findcustomer'])) {
                                     
                                       $query = "SELECT * FROM `customerdata` WHERE account_no='$_POST[accountnum]'";
                                       $result = mysqli_query($conn,$query);

                                       while ($row = mysqli_fetch_assoc($result)) {
                                        
                                       
                                ?>
                                <form class="row g-3 m-4" id="printCustomerDetail">
                                <center><h3>Customer Details</h3></center>
                                <table class="table table-striped mb-5" >
                                        <thead>
                                          <tr>
                                            <th scope="col">Sr.no</th>
                                            <th scope="col">Parameters</th>
                                            <th scope="col">Details</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Account Holder Name</td>
                                            <td><?php echo "$row[first_name] $row[father_name] $row[last_name]"; ?></td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Account Number</td>
                                            <td><?php echo "$row[account_no]"; ?></td>   
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>Balance</td>
                                            <td><?php echo "$row[balance]"; ?></td>   
                                          </tr>                                          
                                          <tr>
                                            <th scope="row">4</th>
                                            <td>Email</td>
                                            <td><?php echo "$row[email_address]"; ?></td>   
                                          </tr>
                                          <tr>
                                            <th scope="row">5</th>
                                            <td>Mobile</td>
                                            <td><?php echo "$row[mobile_no]"; ?></td>   
                                          </tr>
                                          <tr>
                                            <th scope="row">6</th>
                                            <td>Address</td>
                                            <td><?php echo "$row[address]"; ?></td>   
                                          </tr>                                          
                                          <tr>
                                            <th scope="row">7</th>
                                            <td>City</td>
                                            <td><?php echo "$row[city]"; ?></td>   
                                          </tr>
                                          <tr>
                                            <th scope="row">8</th>
                                            <td>State</td>
                                            <td><?php echo "$row[state]"; ?></td>   
                                          </tr>                                        
                                        </tbody>
                                      </table>
                                </form>  
                                <?php
                                }
                              }
                                ?>
                            </div>
                    </div>
                  </div>
          </div>

                                      
<!----------Transter funds section-->
          <div class="tab-pane fade" id="transfer" role="tabpanel" aria-labelledby="transfer-tab" style="margin-top:-3%">
              <center>
                    <h3 class="m-5">Transfer Funds</h3>
              </center>      
                    <!-------Transfer funds form---->
              <form action="../forms/transfer-funds.php" method="post">
                        <div class="row">
                              <div class="col-sm-4">
                                  <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="inputGroup-sizing-lg">From</span>
                                        <input type="number" name="fromaccount" placeholder="Enter Account Number" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-lg">
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="inputGroup-sizing-lg">To</span>
                                        <input type="number" name="toaccount" placeholder="Enter Account Number" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-lg">
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="input-group input-group-lg">
                                        <input type="number" name="amount" placeholder="Enter amount" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-lg">
                                  </div>
                              </div>
                              <div class="col-sm-4"> </div>
                              <div class="col-sm-4 mt-4 d-flex justify-content-center">
                              <i class="fas fa-paper-plane"></i>
                                  <input type="submit" name="transferfund" class="btn btn-primary btn-lg" value="Transfer Funds">
                              </div>
                        </div>                              
                </form>

              
          </div>
      </div>
  </div>
</section>


<hr>
<!--==============================================================================================-->
  </main>
  <!-- End #main -->


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