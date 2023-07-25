<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DICT PHP</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a href="login.php" class="btn btn-success">LOGIN</a>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="border rounded shadow m-5 p-3">
        <center><p class="fs-3"><b>COVID-19:</b> HEALTH DECLARATION FORM</p></center>
        <hr>
        <form method="POST" action="action/healthDeclarationForm.action.php">
          <div class="mb-3">
            <label for="name" class="form-label">Name: </label>
            <input type="text" name="name" class="form-control border-primary" id="name" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Gender: </label>
            <input type="text" name="gender" class="form-control border-primary" id="gender" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age: </label>
            <input type="text" name="age" class="form-control border-primary" id="age" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="mobileNo" class="form-label">Mobile No.: </label>
            <input type="text" name="mobileNo" class="form-control border-primary" id="mobileNo" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="bodyTemp" class="form-label">Body Temp: </label>
            <input type="text" name="bodyTemp" class="form-control border-primary" id="bodyTemp" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="covDiagnosed" class="form-label">COVID-19 DIAGNOSED: (YES/NO)</label>
            <input type="text" name="covDiagnosed" class="form-control border-primary" id="covDiagnosed" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="covEncounter" class="form-label">COVID-19 ENCOUNTER: (YES/NO)</label>
            <input type="text" name="covEncounter" class="form-control border-primary" id="covEncounter" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="covVacinated" class="form-label">VACINATED: (YES/NO)</label>
            <input type="text" name="covVacinated" class="form-control border-primary" id="covVacinated" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="nationality" class="form-label">NATIONALITY: </label>
            <input type="text" name="nationality" class="form-control border-primary" id="nationality" aria-describedby="emailHelp">
          </div>



          <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
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
  </body>
</html>