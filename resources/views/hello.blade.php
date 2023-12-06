<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="card text-center">
  <div class="card-header">
   <h2> Hello World! </h2>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <img src="{{ asset('image/Erlan.jpg') }}" class="img-fluid rounded-start" alt="foto Erlan Noviar" style="max-width: 100%;">
      </div>
      <div class="col-md-8">
        <h5 class="card-title">Biodata Diri</h5>
        <table class="table table-info table-hover">
          <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>Erlan Noviar</td>
          </tr>
          <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>Sumedang, 13 November 2000</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>Desa Sayang, Dsn. Taraju, Kec. Jatinangor, Kab. Sumedang</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>Pria</td>
          </tr>
          <tr>
            <td>Kewarganegaraan</td>
            <td>:</td>
            <td>Indonesia</td>
          </tr>
          <tr>
            <td>Agama</td>
            <td>:</td>
            <td>Islam</td>
          </tr>
          <tr>
            <td>No HP</td>
            <td>:</td>
            <td>081223716565</td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>noviarerlan13@gmail.com</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="card-footer text-body-secondary">
    <br>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>