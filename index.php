<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body  style="background-color : #82E0AA;">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class=" mt-5">
             
               <center>
                  <h3 >Welcome to</h3>
                  <h1>SPARK BANK</h1>
              </center>
              </div>
            </div>

      <!-- Activity section -->
         
            <div class="row mt-5 activity text-center" style="background-color : #82E0AA;">
                  <div class="col-md act">
                    <img src="img/user1.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : black;">Create  User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer1.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : black;">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history1.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color :black;">Transaction History</button></a>
                  </div>
                  
            </div>
       
      <footer class="text-center mt-5 py-3">
        <p>&copy 2021. Made by <b>Gholap Ankita</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>