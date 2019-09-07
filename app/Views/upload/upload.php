<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tempat Pengumpulan Tugas</title>

    <!-- Bootstrap -->
    <link href="<?=$url?>css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md">
      <a class="navbar-brand" href="#">Upload Tugas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Upload</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lihat</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Admin</span></a>
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
          <?=$alert_messages;?>
          &nbsp;
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col">
          <div class="card">
            <div class="card-header text-white bg-dark">
              <h3>Form pengumpulan tugas</h3>
            </div>
            <div class="card-body">
              <form class="form" method="post" action="<?=$url?>upload/upload" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nama: </label>
                  <input type="text" required="true" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label>Jenis Tugas:</label>
                  <select class="form-control" name="jenis_tugas">
                    <option value="individu" selected="true">Individu</option>
                    <option value="kelompok">Kelompok</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>File input:</label>
                  <input class="form-control-file" type="file" required="true" name="file_upload">
                </div>
                <div class="form-group">
                  <label>Password Upload: </label>
                  <input type="password" required="true" name="pass_upload" class="form-control" placeholder="Masukkan password upload">
                </div>
                <button formenctype="multipart/form-data" type="submit" class="btn btn-dark">Upload</button>
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