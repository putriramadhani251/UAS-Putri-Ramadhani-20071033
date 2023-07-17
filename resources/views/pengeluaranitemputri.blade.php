@extends('template.main')

@section('title', 'Pengeluaran Item Putri')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>No BK</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
      </tr>

      @foreach ($pengeluaranitem as $Brg)
        <tr>
          <td>{{ $Brg->no_bk }}</td>
          <td>{{ $Brg->nama_barang }}</td>
          <td>{{ $Brg->jumlah }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
