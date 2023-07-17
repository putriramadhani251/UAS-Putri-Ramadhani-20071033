@extends('template.main')

@section('title', 'Bagian Putri')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>Bagian ID</th>
        <th>Nama Bagian</th>
        <th>Kepala Bagian </th>
        <th>Handphone</th>
      </tr>

      @foreach ($bagian as $Brg)
        <tr>
          <td>{{ $Brg->bagian_id }}</td>
          <td>{{ $Brg->nama_bagian }}</td>
          <td>{{ $Brg->kepala_bagian }}</td>
          <td>{{ $Brg->handphone }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
