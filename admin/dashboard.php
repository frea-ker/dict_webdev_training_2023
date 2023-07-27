<?php
   include "../connection/connection.php";
   session_start();
   if (!isset($_SESSION['idOfUser'])) {
       header("location:../login.php");
   }
   
   function fetch_data($conn, $query)
   {
       $result = mysqli_query($conn, $query);
       $data = array();
       while ($row = mysqli_fetch_assoc($result)) {
           $data[] = $row;
       }
       return $data; 
   }
   
   // Fetch all data from the database
   $query = "SELECT * FROM healthdeclaration";
   $data = fetch_data($db_con, $query); 
   
   // Counters for the conditionals in the loop
   $covid_encounter_count = 0;
   $vaccinated_count = 0;
   $fever_count = 0;
   $adult_count = 0;
   $minor_count = 0;
   $foreigner_count = 0;
   
   // Loop through the data with conditionals
   foreach ($data as $row) {
       // Check COVID-19 Encounter
       if ($row['covEncounter'] == 'YES') {
           $covid_encounter_count++;
       }
   
       // Check Vaccinated
       if ($row['covVacinated'] == 'YES') {
           $vaccinated_count++;
       }
   
       // Check Fever
       if (floatval($row['bodyTemp']) >= 37.5) {
           $fever_count++;
       }
   
       // Check Adult or Minor
       $age = intval($row['age']);
       if ($age >= 18) {
           $adult_count++;
       } else {
           $minor_count++;
       }
   
       // Check Foreigner
       $nationality = strtolower($row['nationality']);
       if ($nationality != 'filipino') {
           $foreigner_count++;
       }
   }
   
   // Fetch all data from the database to display the data in the table
   $query = "SELECT * FROM healthdeclaration";
   $result = mysqli_query($db_con, $query);
   
   // Close the database connection
   mysqli_close($db_con);
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

    <title>Dashboard</title>
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
                    <center>
                        <span class="fs-1"><?= $covid_encounter_count ?></span><br>COVID-19 ENCOUNTER
                    </center>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #ed7d31">
                    <center>
                        <span class="fs-1"><?= $vaccinated_count ?></span><br>VACCINATED
                    </center>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #ffc000">
                    <center>
                        <span class="fs-1"><?= $fever_count ?></span><br>FEVER
                    </center>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #70ad47">
                    <center>
                        <span class="fs-1"><?= $adult_count ?></span><br>ADULT
                    </center>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #f6ac8d">
                    <center>
                        <span class="fs-1"><?= $minor_count ?></span><br>MINOR
                    </center>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 border p-5 text-white" style="background-color: #9b9b9b">
                    <center>
                        <span class="fs-1"><?= $foreigner_count ?></span><br>FOREIGNER
                    </center>
                </div>
            </div>
        </div>
        <br>
        <div class="border rounded p-3 shadow overflow-scroll">
            <table class="DataTable" id="example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Temp</th>
                        <th>Diagnosed</th>
                        <th>Encountered</th>
                        <th>Vaccinated</th>
                        <th>Nationality</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                    <th><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['mobileNo']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['bodyTemp']; ?></td>
                    <td><?php echo $row['covDiagnosed']; ?></td>
                    <td><?php echo $row['covEncounter']; ?></td>
                    <td><?php echo $row['covVacinated']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
                        <th>
                            <button class="btn btn-primary" id="btn_edit" title="EDIT"><i class="bi bi-pencil-square"></i></button>
                            <button class="btn btn-danger" id="btn_delete" title="DELETE"><i class="bi bi-trash"></i></button>
                        </th>
                    </tr>
                 <?php } ?>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  function update_click(clicked_id)
  {
      id_req = clicked_id

      $.ajax({url: "ajax.action/update.ajax.action.php",
      method: 'post',
      data:{id:id_req},
      success: function(result){
        $(".update-ajax").html(result);
      }
    })
  }
</script>
<script type="text/javascript">
  function delete_click(clicked_id)
  {
      id_req = clicked_id

      $.ajax({url: "ajax.action/delete.ajax.action.php",
      method: 'post',
      data:{id:id_req},
      success: function(result){
        $(".delete-ajax").html(result);
      }
    })
  }
</script>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="update-ajax">
          <!-- content from ajax -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="delete-ajax">
          <!-- content from ajax -->
        </div>
      </div>
    </div>
  </div>
</div>
