<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pemrograman Web Lanjut</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Politeknik Negeri Malang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Article</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Pemrograman Web Lanjut</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Rika Maharani</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on October 11, 2020 at 12:00 PM</p>

        
        <form action="/book/update/{{$book->id}}" method="post">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$book->id}}"></br>
<div class="form-group">
<label for="title">Title</label>
<input type="text" class="form-control" required="required" name="title" value="{{$book->title}}"></br>
</div>
<div class="form-group">
<label for="author">Author</label>
<input type="text" class="form-control" required="required" name="author" value="{{$book->author}}"></br>
</div>
<div class="form-group">
<label for="publication">Publication</label>
<input type="text" class="form-control" required="required" name="publication" value="{{$book->publication}}"></br>
</div>
<div class="form-group">
<label for="synopsis">Synopsis</label>
<input type="text" class="form-control" required="required" name="synopsis" value="{{$book->synopsis}}"></br>
</div>
<div class="form-group">
<label for="year">Year</label>
<input type="text" class="form-control" required="required" name="year" value="{{$book->year}}"></br>
</div>
<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
</form>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Rika Maharani 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
