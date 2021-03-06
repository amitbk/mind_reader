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
              For next some minutes, I am going to <span class="text-danger">CONTROL YOUR THOUGTHS!</span>
							Are you ready?
            </div>
						<div class="text-center">
							<img src="img/brain.png" class="img-fluid w-50 border m-2">
						</div>
            <div class="text-secondary text-center">
              MindReader: a machine who can supposedly discern what another person is thinking.
            </div>


            <a href="step2.php" class="btn btn-info btn-block btn-lg mt-4 bg-red font-weight-bold text-white border-white">Yes! Show Me How...</a>

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
