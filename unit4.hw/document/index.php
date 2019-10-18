<?php 

	session_start();
	// session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center"><b>--DOCUMENT--</b></h1>
	<a href="upload.php"  class="btn btn-success">Upload Document</a>
	<form action="" method="GET">
		<table class="table table-striped">
			<tr>
				<td>No</td>
				<td>Name</td>
				<td>Download</td>
				<td>Remove</td>
			</tr>

		<?php 

			if (!isset($_SESSION['documents']) || count($_SESSION['documents'])==0 ) {
				echo "<tr><td colspan='4'><h2  align='center'>No file ready</h2></td></tr>";
			}else{
				for ($i=0; $i < $_SESSION['soFile']; $i++) { 
					if (isset($_SESSION['documents'][$i])) {
					echo "<tr>";
						echo "<td>".$i."</td>";
						echo "<td>".$_SESSION['documents'][$i]['name']."</td>";
						echo '<td><a href="download.php?file='.$_SESSION['documents'][$i]['nameFile'].'"  class="btn btn-success">Download Document</a>';
						echo '<td><a href="remove.php?file='.$_SESSION['documents'][$i]['nameFile'].'&cs='.$i.'"  class="btn btn-warning">Remove Document</a>';
					echo "</tr>";
				}
			}}

		 ?>

		</table>
	</form>
</body>
</html>