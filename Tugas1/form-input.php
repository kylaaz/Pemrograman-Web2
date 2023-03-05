<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Belanja</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container my-5">
    <div class="row align-items-center">

      <!-- Form Input -->
      <div class="col-lg">
        <h2 class="mb-3">Belanja Online</h2>

        <form action="form-hasil.php" method="POST">
          <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label>
            <div class="col-8">
              <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4">Pilih Produk</label>

            <!-- TV -->
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required checked>
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>

              <!-- Kulkas -->
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required>
                <label for="produk_1" class="custom-control-label">Kulkas</label>
              </div>

              <!-- Mesin Cuci -->
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required>
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-8">
              <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <div class="offset-4 col-8">
              <button type="submit" class="btn btn-primary">Beli</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Daftar Harga -->
      <div class="col-lg">
        <ul class="list-group">
          <li class="list-group-item active">DAFTAR HARGA</li>
          <li class="list-group-item">TV : Rp. 4.200.000</li>
          <li class="list-group-item">Kulkas : Rp. 3.100.000</li>
          <li class="list-group-item">Mesin Cuci : Rp. 3.800.000</li>
          <li class="list-group-item active">HARGA DAPAT BERUBAH SETIAP SAAT</li>
        </ul>
      </div>
    </div>
</body>

</html>