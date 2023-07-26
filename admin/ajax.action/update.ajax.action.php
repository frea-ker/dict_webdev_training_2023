<?php

	session_start();
	include "../../connection/connection.php";

	$id = $_POST['id'];

	$sql = "SELECT * FROM `healthdeclaration` WHERE id=".$id."";
	$runsql = mysqli_query($db_con, $sql);
	$getsql = mysqli_fetch_array($runsql);
?>

    <div class="container">
      <div class="border rounded shadow p-3">
        <center><p class="fs-3"><b>COVID-19:</b> HEALTH DECLARATION FORM</p></center>
        <hr>
        <form method="POST" action="ajax.action/action/update.action.php">
        	<input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="mb-3">
            <label for="name" class="form-label">Name: </label>
            <input type="text" name="name" value="<?php echo $getsql['name']?>" required class="form-control border-primary" id="name" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Gender: </label>
            <input type="text" name="gender" value="<?php echo $getsql['gender']?>" required class="form-control border-primary" id="gender" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age: </label>
            <input type="text" name="age" value="<?php echo $getsql['age']?>" required class="form-control border-primary" id="age" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="mobileNo" class="form-label">Mobile No.: </label>
            <input type="text" name="mobileNo" value="<?php echo $getsql['mobileNo']?>" required class="form-control border-primary" id="mobileNo" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email: </label>
            <input type="email" name="email" value="<?php echo $getsql['email']?>" required class="form-control border-primary" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="bodyTemp" class="form-label">Body Temp: </label>
            <input type="text" name="bodyTemp" value="<?php echo $getsql['bodyTemp']?>" required class="form-control border-primary" id="bodyTemp" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="covDiagnosed" class="form-label">COVID-19 DIAGNOSED: (YES/NO)</label>
            <select name="covDiagnosed" required class="form-control border-primary" id="covDiagnosed" aria-describedby="emailHelp">
              <option  value="<?php echo $getsql['covDiagnosed']?>"  selected=""><?php echo $getsql['covDiagnosed']?></option>
              <option disabled="">------</option>
              <option value="YES">YES</option>
              <option value="NO">NO</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="covEncounter" class="form-label">COVID-19 ENCOUNTER: (YES/NO)</label>
            <select name="covEncounter" value="<?php echo $getsql['name']?>" required class="form-control border-primary" id="covEncounter" aria-describedby="emailHelp">
              <option  value="<?php echo $getsql['covEncounter']?>"  selected=""><?php echo $getsql['covEncounter']?></option>
              <option disabled="">------</option>
              <option value="YES">YES</option>
              <option value="NO">NO</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="covVacinated" class="form-label">VACINATED: (YES/NO)</label>
            <select  name="covVacinated" value="<?php echo $getsql['name']?>" required class="form-control border-primary" id="covVacinated" aria-describedby="emailHelp">
              <option  value="<?php echo $getsql['covVacinated']?>"  selected=""><?php echo $getsql['covVacinated']?></option>
              <option disabled="">------</option>
              <option value="YES">YES</option>
              <option value="NO">NO</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="nationality" class="form-label">NATIONALITY: </label>
            <input type="text" name="nationality" value="<?php echo $getsql['nationality']?>" required class="form-control border-primary" id="nationality" aria-describedby="emailHelp">
          </div>
          <br>
          <center>
          	<button type="submit" class="btn btn-primary p-3">SAVE CHANGE</button>
          </center>
        </form>
      </div>
    </div>
