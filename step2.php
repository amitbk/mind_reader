<!DOCTYPE html>
<html lang="en">
<?php include('conf.php'); ?>
<head>
  <title><?=$title;?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>
<body class="<?=$bg?>">
  <div class="container-fluid bg-danger text-white text-center p-2">
    <h4>MindReader</h4>
  </div>
  <div class="container-fluid">
    <div class="row mt-4 justify-content-center">

      <div class="col-12 col-sm-12 col-md-10 col-lg-7">
        <div class="card shadow-lg <?=$bg?>">
          <div class="card-body justify-content-center">
            <div class="title1 py-4 text-center">
              Follow this <span class="text-danger">STEPS </span> first
            </div>
						<div class="text-center">
							<img src="img/brain.png" class="img-fluid w-50 border m-2">
						</div>


            <div class="">
              <h3>
                Now Read Following instructions, and go according to them...!!
              </h3>

              <hr>
              Just take any One 2 digit number in your mind....<br><br>
              Raplace its both digits each other..<br><br>
              Eg. If you take 57.<br><br>

              Then Your New number will be =75<br><br>
              Now differntiate max number from min...<br><br>
              As  75-57=18..<br><br>

              <center><img src="img/eg.jpg"></center>
              THATS IT...<br><br>

               <hr>
               Now as 18, Your answer will be like something..
               Now go to NEXT page..<br>And<br>
               <span>Take a LOOK on a Symbol next to Your Answer...</span>
               <br><br>
               Dont Worry..<br>
               I will display the <span >Symbol</span> which is Just infront of your answer..!!
               <br><br>THATS MAGIC......!!!

            </div>

            <a href="step3.php" class="btn btn-info btn-block btn-lg mt-4 bg-red font-weight-bold text-white border-white">Show Me Symbols...</a>

          </div>
        </div>

        <div class="text-center mt-3">
          <small>
            <a class="text-dark" target="_blank" href="privacy.php">Privacy Policy</a> |
            <a class="text-dark" target="_blank" href="terms.php">Terms & Conditions</a> |
            <a class="text-dark" target="_blank" href="disclaimer.php">Disclaimer</a> |
            <a class="text-dark" target="_blank" href="credits.php">Credits</a>

            <br>

            This website in no way is affiliated with Facebook or any Facebook entities. Once you leave Facebook the responsibility no longer is on their site. We make every attempt to clearly state and show all proof. We do not sell your email or any information. Can Spam compliant.

          </small>
        </div>

      </div>
    </div>
  </div>


</body>

</html>
