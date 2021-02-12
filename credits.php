<!DOCTYPE html>
<html lang="en">
<?php include('conf.php'); ?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css/style.css">

</head>
<body class="<?=$bg?>">

  <div class="container-fluid">
    <div class="row mt-4 justify-content-center">

      <div class="col-12 col-sm-6">
        <div class="card shadow-lg <?=$bg?>">
          <div class="card-body text-info">
            <h2><strong>Credits</strong></h2>

            <hr>

            <a href="https://getbootstrap.com/">Bootstrap 4</a> <br>
            <a href="https://fontawesome.com">Font Awesome</a> <br>
            <a href="flymit.com">FLYMIT</a> <br>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
