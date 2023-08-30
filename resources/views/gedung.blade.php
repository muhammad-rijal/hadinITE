<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  
  <body style="margin: 70px">
  
  <div class="container">
  
    <h1>Daftar Fakultas</h1>
  
      <table class="table table-bordered">
        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Gedung</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <th scope="row">{{ $loop -> iteration}}</th>
          <th>{{ $item['nama_gedung'] }}</th>
        </tr>
        @endforeach
      </tbody>
      </table>

      <h1><a href="/">Kembali</a></h1>
  </div>
  
  </body>