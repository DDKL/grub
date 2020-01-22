<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!--Bootstrap 4 is designed to be responsive to mobile devices. Mobile-first styles are part of the core framework.

To ensure proper rendering and touch zooming, add the following <meta> tag inside the <head> element:-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).

The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
  <title>Testosterone</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/datatables.min.css">
  <script src="js/datatables.min.js"></script>
  <script src="js/mdb.min.js"></script>


  <script>
    $(document).ready(function() {
      $('#dtable').DataTable({
        "paging": false
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>

  <style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
      bottom: .5em;
    }
  </style>
</head>
<body class="">



  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="index.php">GrubRank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="testosterone.php">Testosterone</a></li>
        <li class="nav-item"><a class="nav-link" href="estrogen.php">Estrogen</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">  
  <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "grubrank";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM estrogen";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table id=\"dtable\" class=\"table table-sm table-bordered table-light table-striped table-hover\">
		<thead class=\"elegant-color white-text\">
		<tr>
          <th><b>Food</b></th>
          <th><b>+</b></th>
          <th><b>-</b></th>
        </tr>
		</thead>
		<tbody id=\"myTable\">";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["name"]."</td><td>".$row["increase"]."</td><td>".$row["decrease"]."</td></tr>";
		}
		echo "</tbody></table>";
	} else {
		echo "0 results";
	}
	$conn->close();
  ?>
  </div>

</body>

</html>