@extends('layout.adminLayout')

@section('judul')
    Laporan
@endsection
@section('css')
	<link rel="stylesheet" href="\dataTables\datatables.min.css">
@endsection
@section('content')


        <form action="{{ url('petugas/laporan') }}" method="get">
            <select class="my-3" name="pilih" id="autoSizingSelect"
                style="width: 120px; height: 35px; border-radius: 5px">
                <option value="0">Tertunda</option>
                <option value="proses">Proses</option>
                <option value="selesai">selesai</option>
            </select>
            <input type="date" name="" id="">
            <button type="submit" class=" btn-info" style="width: 75px; height: 35px;  border-radius: 5px; background-color: #9DDBE9;">Filter</button>
        </form>

        <div class="card pt-3">
            <div class="card-body ">
                <table class="table" id="tabelLaporan">
                    <thead>
                        <tr>
                            <th scope="col">{{session('coba')}}</th>
                            <th scope="col">Tanggal Pengaduan</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Isi Laporan</th>
                            <th scope="col">Validasi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($data->all() as $item)
                        <tr>
                            <td scope="row">{{$item->id_pengaduan}}</td>
                            <td>{{$item->tgl_pengaduan}}</td>
                            <td>{{$item->nik}}</td>
                            <td>{{$item->isi_laporan}}</td>
                            <td>
                                @switch($item->status)
                                        @case('proses')
                                            <button type="button" class="btn btn-primary">{{ $item->status }}</button>
                                        @break
        
                                        @case('selesai')
                                            <button type="button" class="btn btn-success">{{ $item->status }}</button>
                                        @break
        
                                        @default
                                            <button type="button" class="btn btn-warning">Tertunda</button>
                                    @endswitch
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>

@endsection

@section('js')
	<script src="\dataTables\datatables.min.js"></script>
	<script>
		let table = new DataTable('#tabelLaporan', {
    // options
});
	</script>
@endsection