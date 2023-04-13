<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class='container mt-5 text-center'>
        <form method='post' action=''>
            @csrf
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="baju" name='nama'>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='keterangan'></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Harga</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="200.560" name='harga'>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gambar</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name='gambar_url'>
</div>
<div class="mb-3">
  <button class='btn btn-primary' type='submit'>Submit</button>
</div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>