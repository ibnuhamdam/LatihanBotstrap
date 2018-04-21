<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand page-scroll" href="#home">Ayatull's</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/opal.jpg" class="img-circle">
      <h1>Ayatullah Naufal Azmi Arham</h1>
      <p>College Student | Web Developer | Designer</p>
    </div>
    <!-- Akhir jumbotron -->
    
    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2>
            <hr>
          </div> 
        </div>

        <div class="row">
          <div class="col-sm-6">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <div class="col-sm-6"> 
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- Port Folio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Portfolio</h2>

            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/3.png">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/3.png">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/3.png">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/3.png">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/3.png">
            </a>
          </div>

          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="img/3.png">
            </a>
          </div>
          
      </div>
    </section>
    <!-- Akhir Port Folio -->

    <!-- Contact -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="email" class="form-control" id="nama" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Masukan Email">
              </div>
              <div class="form-group">
                <label for="telp">Telepon</label>
                <input type="telp" class="form-control" id="telp" placeholder="Masukan Nomor Telepon">
              </div>
              <select class="form-control">
                <option>== Pilih Kategori ==</option>
                <option>Web Design</option>
                <option>Web Development</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="Masukan Pesaan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>copyright &copy; 2018 | built by. <a href="https://www.instagram.com/ayatullahnfl/">Ayatullah Naufal</a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <a href="https://www.instagram.com/ayatullahnfl/" class="btn btn-danger"><i class="glyphicon glyphicon-camera"></i>   Follow My Instagram </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->
  </body>
</html>