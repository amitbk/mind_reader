<?php include "header.php"; ?>
<body>
<div class="master">
	<div class="m8container">
	<?php include "logobg.php"; ?>
		<div class="content">
					And..... This is your Symbol..!!
					<br>
					
					<?php if(isset($_GET['amit'])) { ?>
					<div class="answer" style="font-size:200px;color:#fff;">
					<span class=<?php echo $_GET['amit'];?>></span>
					<br>
					<?php } else { ?>
					<br>
					<span style="color:yellow">(Sorry your Symbol can't be displayed... Restart the Mind Reader..!)</span>
					<br><br>
					<?php } ?>
					<br>
					<a class="button" href="index.php">Restart the Reader <span class="glyphicon glyphicon-arrow-right"></span></a>		
					<hr>
					<?php include "fblikebox.php";?>
					<hr>
					<?php include "connects.php";?>

		</div>
	</div>
</div>
</body></html>