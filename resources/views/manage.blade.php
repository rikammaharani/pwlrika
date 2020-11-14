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
        <h1 class="mt-4">Daftar Buku</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Rika Maharani</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on October 11, 2020 at 12:00 PM</p>

        <hr>

        <table class="table table-bordered table-striped">
<thead>
<tr>
<th>No</th>
<th>Title</th>
<th>Author</th>
<th>Publication</th>
<th>Synopsis</th>
<th>Year</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($book as $a)
<tr>
<td>{{$a->id}}</td>
<td>{{$a->title}}</td>
<td>{{$a->author}}</td>
<td>{{$a->publication}}</td>
<td>{{$a->synopsis}}</td>
<td>{{$a->year}}</td>
<td><a href="book/edit/{{ $a->id }}" class="badge badge-warning">Edit</a><br> 
<a href="book/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a></td>
</tr>
@endforeach
</tbody>
</table>

<a href="book/add" class="btn btn-primary">Tambah Data</a><br>

<a href="/book/cetak_pdf" class="btn btn-primary"
target="_blank">CETAK PDF</a>


</div>
        
        </div>

      

   

      

      </div>

    </div>
    <!-- /.row -->

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
