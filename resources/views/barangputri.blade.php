@extends('template.main')

@section('title', 'Barang Putri')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>Barang ID</th>
        <th>Nama Barang</th>
        <th>Satuan </th>
        <th>Harga</th>
        <th>Kategori</th>
      </tr>

      @foreach ($barang as $Brg)
        <tr>
          <td>{{ $Brg->barang_id }}</td>
          <td>{{ $Brg->nama_barang }}</td>
          <td>{{ $Brg->satuan }}</td>
          <td>{{ $Brg->harga }}</td>
          <td>{{ $Brg->kategori_id }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
