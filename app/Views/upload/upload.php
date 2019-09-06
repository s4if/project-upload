<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tempat Pengumpulan Tugas</title>

    <!-- Bootstrap -->
    <link href="<?=$url?>css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-4 col-sm">
          &nbsp;
          <?=$flash_messages?>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col">
          <div class="card">
            <div class="card-header">
              <h3>Form pengumpulan tugas</h3>
            </div>
            <div class="card-body">
              <form class="form" method="post" action="<?=$url?>uploading" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama 1 </label>
                  <input type="text" required="true" name="nama_1" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label>Nama 2 </label>
                  <input type="text" name="nama_2" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label>Kelas </label>
                  <select class="form-control" name="kelas">
                    <option value="X1">X1</option>
                    <option value="X2">X2</option>
                    <option value="X3">X3</option>
                    <option value="X4">X4</option>
                    <option value="X5">X5</option>
                    <option value="X6">X6</option>
                    <option value="X7">X7</option>
                    <option value="X8">X8</option>
                    <option value="X9">X9</option>
                    <option value="X10">X10</option>
                    <option disabled>──────────</option>
                    <option value="XIA1">XIA1</option>
                    <option value="XIA2">XIA2</option>
                    <option value="XIA3">XIA3</option>
                    <option value="XIA4">XIA4</option>
                    <option value="XIS1">XIS1</option>
                    <option value="XIS2">XIS2</option>
                    <option value="XIS3">XIS3</option>
                    <option value="XIS4">XIS4</option>
                    <option disabled>──────────</option>
                    <option value="XIIA1">XIIA1</option>
                    <option value="XIIA2">XIIA2</option>
                    <option value="XIIA3">XIIA3</option>
                    <option value="XIIA4">XIIA4</option>
                    <option value="XIIS1">XIIS1</option>
                    <option value="XIIS2">XIIS2</option>
                    <option value="XIIS3">XIIS3</option>
                    <option value="XIIS4">XIIS4</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>File input</label>
                  <input type="file" required="true" name="file_upload">
                </div>
                <button formenctype="multipart/form-data" type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=$url?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=$url?>js/bootstrap.bundle.min.js"></script>
  </body>
</html>