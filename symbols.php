<?php include "header.php"; ?>
<body>
<div class="master">
	<div class="m8container">
	<?php include "logobg.php"; ?>
		<div class="content">


					Find Symbol in front of your answer...and click on <span style="color:yellow">Show My Symbol</span> button at bottom...!!
					<br>
					Dont Click on your answer...<br>
					<div class="fb-like" data-href="https://facebook.com/herebyte" target="_blank" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div><br><br>

					<style>
					body
					{
					font-family: Segoe UI;
					}
					.box {width:95%;font-size:45px;}
					.box:hover{border:1px solid #fff;}
						
					.row{margin:0px;}
	
					#number{background-color:#403776;color:#D8C8DA;width:50%;}

					#symbol{background-color:#23943E;color:#99F7B0;}
					#number, #symbol {padding:15px;height:100px;}
					</style>


					<?php
					$a="012345678";


					$symbol=array("<span class='glyphicon glyphicon-music'></span>", "<span class='glyphicon glyphicon-heart'></span>", "<span class='glyphicon glyphicon-star'></span>", "<span class='glyphicon glyphicon-flag'></span>", "<span class='glyphicon glyphicon-camera'></span>", "<span class='glyphicon glyphicon-leaf'></span>", "<span class='glyphicon glyphicon-plane'></span>", "<span class='glyphicon glyphicon-thumbs-up'></span>", "<span class='glyphicon glyphicon-phone'></span>");

					$b=str_shuffle($a);

					$c=substr($b,0,8);
					$c=str_shuffle($c);
					$ans=$symbol[$b[8]];

					$sm=0;

					echo "<div class='row'>";
					echo "<div class='col-sm-1'></div>";
					echo "<div class='col-sm-5'>";
					for($i=0;$i<=50;$i++)
					{

					echo "<div class='row box'><div class='col-sm-6' id='number'>".$i."</div>";

					echo "<div class='col-sm-6' id='symbol'>";

							if($i%9==0)
							{
							echo $ans;
							$c=str_shuffle($c);
							$sm=0;
							}
							else
							{

							echo $symbol[$c[$sm]];$sm++;
							}
					echo "</div>";
					echo "</div>";
					}
					echo "</div>";


					echo "<div class='col-sm-5'>";
					for($i=51;$i<=100;$i++)
					{

						echo "<div class='row box'><div class='col-sm-6' id='number'>".$i."</div>";

						echo "<div class='col-sm-6' id='symbol'>";

						if($i%9==0)
						{
						echo $symbol[$b[8]];
						$c=str_shuffle($c);
						$sm=0;
						}
						else
						{

						echo $symbol[$c[$sm]];$sm++;
						}
						echo "</div>";
						echo "</div>";
					}
					echo "</div><div class='col-sm-1'></div></div>";
					echo "<br><span class='glyphicon glyphicon-chevron-down'></span>Get Ready...";
					$amit=strtok(substr($ans,13),"'");
					?>




					<br><br><a class="button" href="result.php?amit='<?php echo $amit;?>'">Show my Symbol <span class="glyphicon glyphicon-arrow-right"></span></a>
					<hr>
					<?php include "fblikebox.php";?>
					<hr>
					<?php include "connects.php";?>

		</div>
	</div>
</div>
</body></html>