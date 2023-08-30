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
        <th scope="col">Nama Resmi</th>
        <th scope="col">Nama Singkatan</th>
        <th scope="col">Nama Asing</th>
        <th scope="col">Nama Asing Singkatan</th>
        <th scope="col">List Gedung</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <th scope="row">{{ $loop -> iteration}}</th>
        <th>{{ $item['nama_resmi'] }}</th>
        <th>{{ $item['nama_singkat'] }}</th>
        <th>{{ $item['nama_asing'] }}</th>
        <th>{{ $item['nama_asing_singkat'] }}</th>
        <th><a href="gedung/{{ $item['id'] }}">Klik</a></th>
      </tr>
      @endforeach
    </tbody>
    </table>
</div>

</body>



