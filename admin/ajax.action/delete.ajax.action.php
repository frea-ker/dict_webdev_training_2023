<?php

	session_start();
	include "../../connection/connection.php";

	$id = $_POST['id'];;
?>

<div>
  <form class="m-5" method="POST" action="ajax.action/action/delete.action.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <center>
      <p class="fs-1">ARE YOU SURE YOU WANT TO DELETE THIS?</p>
      <br><br>
      <button type="submit" class="btn btn-danger p-3">DELETE</button>
    </center>
  </form>
</div>
