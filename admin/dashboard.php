<?php
	session_start();
	if(!isset($_SESSION['idOfUser'])){
		header("location:../login.php");
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <title>Hello, world!</title>
  </head>
  <body>
    <header class="mb-3" style="border-bottom: 1px solid black">
      <nav class="navbar navbar-light bg-secondary">
        <div class="container">
          <a href="action/logout.action.php" onclick="return confirm('Are you sure you want to logout?');" class="btn btn-danger">LOGOUT</a>
        </div>
      </nav>
    </header>
  	<div class="container">
  		<div>
  			<div class="row mb-1">
  				<div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #5b9bd5">
  					<center><span class="fs-1">1234</span><br>COVID-19 ENCOUNTER</center>
  				</div>  
  				<div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #ed7d31">
  					<center><span class="fs-1">1234</span><br>VACCINATED</center>
  				</div>  
  				<div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #ffc000">
  					<center><span class="fs-1">1234</span><br>FEVER</center>
  				</div>
  				<div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #70ad47">
  					<center><span class="fs-1">1234</span><br>ADULT</center>
  				</div>  
  				<div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #f6ac8d">
  					<center><span class="fs-1">1234</span><br>MINOR</center>
  				</div>  
  				<div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #9b9b9b">
  					<center><span class="fs-1">1234</span><br>FOREINGER</center>
  				</div>  				
  			</div>
  		</div>
  		<br>
  		<div class="border rounded p-3 shadow overflow-scroll">
		  	<table class="DataTable" id="example">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>E-mail</th>
			      <th>Name</th>
			      <th>Gender</th>
			      <th>Age</th>
			      <th>Mobile</th>
			      <th>Temp</th>
			      <th>Diagnosed</th>
			      <th>Encountered</th>
			      <th>Vaccinated</th>
			      <th>Nationality</th>
			      <th>Action</th>
			    </tr>
			  </thead>
			  <tbody>
<!--WHILE LOOP START-->
			    <tr>
			      <th>1</th>
			      <td>text</td>
			      <td>text</td>
			      <td>text</td>
			      <td>text</td>
			      <td>text</td>
			      <td>text</td>
			      <td>text</td>
			      <td>text</td>
			      <td>text</td>
			      <td>text</td>
			      <th>
			      	<button class="btn btn-primary" id="btn_edit" title="EDIT"><i class="bi bi-pencil-square"></i></button>
			      	<button class="btn btn-danger" id="btn_delete" title="DELETE"><i class="bi bi-trash"></i></button>
			      </th>
			    </tr>
<!--WHILE LOOP END-->
			  </tbody>
			</table>
  		</div>
  	</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!--DATATABLE SCRIPT-->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		new DataTable('#example');
	</script>
  </body>
</html>