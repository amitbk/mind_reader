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
              Great! <span class="text-danger">Last Step </span> now
            </div>
						<!-- <div class="text-center">
							<img src="img/brain.png" class="img-fluid w-50 border m-2">
						</div> -->


            <div class="">
              <h3 class="text-center">
                Find Symbol in front of your answer... <br> and click on <span class="font-weight-bold">Show My Symbol</span> button at bottom...!!
      					<br><br>
      					Dont Click on your answer...<br>
              </h3>

              <hr>
              <?php
    					$a="012345678";

    					$symbol = [
                          "fas fa-cat",
                          "fas fa-chess-knight",
                          "fas fa-chess-queen",
                          "fas fa-chess-rook",
                          "fas fa-chess-pawn",
                          "fas fa-chess-king",
                          "fas fa-child",
                          "fas fa-crow",
                          "fas fa-democrat",
                          "fas fa-dog"
                        ];

    					$shuffeled_numbers=str_shuffle($a);

    					$c=substr($shuffeled_numbers,0,8);
    					$c=str_shuffle($c);
    					$ans=$symbol[$shuffeled_numbers[8]];

    					$symbol_index=0;

              echo "<div class='row'>";

    					for($i=0;$i<=100;$i++)
    					{
                ?>
                  <div class="col-6 col-sm-4 col-md-4">
                    <div class="card mb-2">
                      <div class="card-body d-flex">

                        <div style="font-size: 50px">
                          <?=$i;?>
                        </div>
                        <?php
            							if($i%9==0)
            							{
              							echo "<i class='$ans fa-5x mx-auto' ></i>";
              							$c=str_shuffle($c);
              							$symbol_index=0;
            							}
            							else
            							{
        						         $sym = $symbol[$c[$symbol_index]];$symbol_index++;
                             echo "<i class='$sym fa-5x mx-auto' ></i>";
            							}
                        ?>
                      </div>
                    </div>
                  </div>
                <?php
    					}
              echo "</div>";
              ?>
            </div>

            <a  href="result.php?mr=<?php echo $ans;?>"  class="btn btn-info btn-block btn-lg mt-4 bg-red font-weight-bold text-white border-white">Read my mind now...</a>

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
