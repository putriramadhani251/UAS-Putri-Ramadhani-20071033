@extends('template.main')

@section('title', 'Pengeluaran Putri')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>No BK</th>
        <th>Tanggal</th>
        <th>No Reff</th>
        <th>Nama Bagian</th>
        <th>Nama Petugas</th>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
      </tr>

      @foreach ($pengeluaran as $Brg)
        <tr>
          <td>{{ $Brg->no_bk }}</td>
          <td>{{ $Brg->tanggal }}</td>
          <td>{{ $Brg->no_reff }}</td>
          <td>{{ $Brg->nama_bagian }}</td>
          <td>{{ $Brg->nama_petugas }}</td>
          <td>{{ $Brg->nama_barang }}</td>
          <td>{{ $Brg->jumlah }}</td>
          <td>{{ $Brg->keterangan }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
