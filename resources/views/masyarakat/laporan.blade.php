@extends('layout.masyarakatLayout')

@section('content')
    <div class="container pt-4">


        <form action="{{ url('filter') }}" method="get">
            <select class="my-3" name="pilih" id="autoSizingSelect" style="width: 120px; height: 35px; border-radius: 5px">
                <option value="0">Tertunda</option>
                <option value="proses">Proses</option>
                <option value="selesai">selesai</option>
            </select>
            <button type="submit" class=" btn-info"
                style="width: 75px; height: 35px;  border-radius: 5px; background-color: #9DDBE9;">Filter</button>
        </form> 

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NIK</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Isi Laporan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->tgl_pengaduan }}</td>
                        <td>{{ $item->isi_laporan }}</td>
                        <td>
                            @switch($item->status)
                                @case('proses')
                                    <button type="button" class="btn btn-warning">{{ $item->status }}</button>
                                @break

                                @case('selesai')
                                    <button type="button" class="btn btn-warning">{{ $item->status }}</button>
                                @break

                                @default
                                    <button type="button" class="btn btn-warning">Tertunda</button>
                            @endswitch
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
