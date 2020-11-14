<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

<style type="text/css">
table tr td,
table tr th{
font-size: 9pt;
}
</style>
<center>
<h5>Laporan Artikel</h4>
<h5>Mata Kuliah Pemrograman Web Lanjut</h5>
<h6> (Rika Maharani - MI 2F)</h6>
<br>

</center>
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>No</th>
<th>Title</th>
<th>Author</th>
<th>Publication</th>
<th>Synopsis</th>
<th>Year</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($book as $a)
<tr>
<td>{{ $i++ }}</td>
<td>{{$a->title}}</td>
<td>{{$a->author}}</td>
<td>{{$a->publication}}</td>
<td>{{$a->synopsis}}</td>
<td>{{$a->year}}</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>
