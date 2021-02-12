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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
              This was Symbol <span class="text-danger">in your mind!</span>
            </div>


            <div class="text-center">


              <hr>
              <h1>
                <i class="<?php echo $_GET['mr'];?> fa-5x"></i>
              </h1>
            </div>
            <div class="text-center">
              <a  href="index.php"  class="btn btn-info btn-block btn-lg mt-4 bg-red font-weight-bold text-white border-white">Restart</a>
            </div>


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
