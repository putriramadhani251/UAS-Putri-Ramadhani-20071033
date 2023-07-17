@extends('template.main')

@section('title', 'Petugas Putri')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>Petugas ID</th>
        <th>Nama Petugas</th>
        <th>Alamat</th>
        <th>Handphone</th>
        <th>Level</th>
      </tr>

      @foreach ($petugas as $Brg)
        <tr>
          <td>{{ $Brg->petugas_id }}</td>
          <td>{{ $Brg->nama_petugas }}</td>
          <td>{{ $Brg->alamat }}</td>
          <td>{{ $Brg->hanphone }}</td>
          <td>{{ $Brg->level }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
