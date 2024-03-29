<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <div class='container mt-5'>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $p)
    <tr>
      <th scope="row">{{$p->id}}</th>
      <td>{{$p->nama}}</td>
      <td>{{$p->keterangan}}</td>
      <td>{{$p->harga}}</td>
      <td>
        <div style='display:flex;'>
        <div style='margin-right:2px'>
        <a href="/products/{{$p->id}}/update" class='btn btn-primary'>Edit</a>
        </div> 
        <div>
        <form action='/products/{{$p->id}}' method='post'>
        @method('DELETE')
        @csrf
        <button class='btn btn-danger' type='submit'>Delete</button>
    </form>
        </div>
        </div>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class='mt-3 text-center'>
<a class='btn btn-primary' href='/product/insert'>Insert Products</a>
</div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>