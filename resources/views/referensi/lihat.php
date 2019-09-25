<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tempat Pengumpulan Tugas</title>

    <!-- Bootstrap -->
    <link href="<?=$url?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$url?>css/datatables.min.css" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
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
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-offset-4 col-md-4">
          <?=$flash_messages?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="panel panel-info">
            <div class="panel-body">
              <div class="form-inline">
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
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Daftar pengumpul tugas</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-condensed table-responsive" id="tabelUtama">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kelas</th>
                        <th>Nama 1</th>
                        <th>Nama 2</th>
                        <th>Nama File</th>
                        <th>Waktu Pengumpulan</th>
                    </tr>
                </thead>
              </table>
            </div>
            <div class="panel-footer"> &nbsp </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=$url?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=$url?>js/bootstrap.bundle.min.js"></script>
    <script src="<?=$url?>js/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      table = $('#tabelUtama').DataTable({
        "order": [[ 0, "desc" ]],
        "ajax": {
          "url": "<?=$ajax_url?>",
          "type": "POST"
        }
      });
    });
    </script>
  </body>
</html>