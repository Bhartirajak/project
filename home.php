<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electricity Supply Code</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
  <style>
    .electricity-heading {
      margin-bottom: 40px;
    }

    .btn-esc {
      margin-bottom: 8px;
      background-color: #ffffff;
      color: #28a745;
      border: 1px solid #28a745;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <button class="btn btn-dark" id="logoutButton">Logout</button>
  </nav>
  <div id="navbarToggleExternalContent" class="bg-dark p-4" style="display: none;">
    <h4 class="text-white">Logout</h4>
    <span class="text-muted"> navbar</span>
  </div>
  <div class="container mt-5">
    <br>


    <div style="margin-bottom: 20px;"></div>
    <h1 class="text-center electricity-heading">ELECTRICITY SUPPLY CODE</h1>
    <div class="row mt-3">
      <div class="col-md-4">

        <a href="esc1.php" class="btn btn-primary btn-block btn-esc">ESC1</a>
      </div>
      <div class="col-md-4">

        <a href="esc2.php" class="btn btn-primary btn-block btn-esc">ESC2</a>
      </div>
      <div class="col-md-4">

        <a href="esc3.php" class="btn btn-primary btn-block btn-esc">ESC3</a>
      </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
    <div class="row mt-3">
      <div class="col-md-4">

        <div class="dropdown">
          <button class="btn btn-primary btn-block dropdown-toggle btn-esc" type="button" id="dropdownMenuButton4"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ESC4
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
            <a class="dropdown-item" href="esc4a.php">ESC4a</a>
            <a class="dropdown-item" href="esc4b.php">ESC4b</a>

          </div>
        </div>
      </div>
      <div class="col-md-4">

        <div class="dropdown">
          <button class="btn btn-primary btn-block dropdown-toggle btn-esc" type="button" id="dropdownMenuButton5"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ESC5
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
            <a class="dropdown-item" href="esc5a.php">ESC5a</a>
            <a class="dropdown-item" href="esc5b.php">ESC5b</a>
            <a class="dropdown-item" href="esc5c.php">ESC5c</a>

          </div>
        </div>
      </div>
      <div class="col-md-4">

        <div class="dropdown">
          <button class="btn btn-primary btn-block dropdown-toggle btn-esc" type="button" id="dropdownMenuButton6"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ESC6
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
            <a class="dropdown-item" href="esc6a.php">ESC6a</a>
            <a class="dropdown-item" href="esc6b.php">ESC6b</a>

          </div>
        </div>
      </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
    <div class="row mt-3">
      <div class="col-md-4">

        <a href="esc7.php" class="btn btn-primary btn-block btn-esc">ESC7</a>
      </div>
      <div class="col-md-4">

        <a href="esc8.php" class="btn btn-primary btn-block btn-esc">ESC8</a>
      </div>
      <div class="col-md-4">

        <a href="esc9.php" class="btn btn-primary btn-block btn-esc">ESC9</a>
      </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
    <div class="row mt-3">
      <div class="col-md-4">

        <div class="dropdown">
          <button class="btn btn-primary btn-block dropdown-toggle btn-esc" type="button" id="dropdownMenuButton10"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ESC10
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
            <a class="dropdown-item" href="esc10a.php">ESC10a</a>
            <a class="dropdown-item" href="esc10b.php">ESC10b</a>

          </div>
        </div>
      </div>
      <div class="col-md-4">

        <div class="dropdown">
          <button class="btn btn-primary btn-block dropdown-toggle btn-esc" type="button" id="dropdownMenuButton11"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ESC11
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
            <a class="dropdown-item" href="esc11a.php">ESC11a</a>
            <a class="dropdown-item" href="esc11b.php">ESC11b</a>

          </div>
        </div>
      </div>
      <div class="col-md-4">

        <a href="esc12.php" class="btn btn-primary btn-block btn-esc">ESC12</a>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
  <script>
    document.getElementById('logoutButton').addEventListener('click', function () {
      window.location.href = 'index.php';
    });
  </script>
</body>

</html>