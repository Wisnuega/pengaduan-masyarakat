@extends('layout.adminLayout')

@section('content')
    <div class="d-flex justify-content-between">
        <div class="col-4">
                <div class="card m-auto" style="width: 23rem; background: #9DDBE9;">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4 mt-2">Registrasi</h2>

                        @if (session('pesan'))
                            {{-- Alert --}}
                            <div class="alert alert-success" role="alert">
                                {{ session('pesan') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            {{-- Alert --}}
                            <div class="alert alert-danger" role="alert">
                                Gagal registrasi
                            </div>
                        @endif

                        {{-- form --}}
                        <form action="{{ url('petugas/registrasi') }}" method="post">
                            @csrf

                            <div class="col-12 my-2">
                                <label for="nama_petugas" class="form-label">Nama Petugas</label>
                                <input type="text" name="nama_petugas" class="form-control" id="nama_petugas">
                                @error('nama')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12 my-2">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                                @error('username')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12 my-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                                @error('password')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12 my-2">
                                <label for="telp" class="form-label">No Telpon</label>
                                <input type="number" name="telp" class="form-control" id="telp">
                                @error('telp')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12 my-2">
                                <label for="level" class="form-label">Level</label>
                                <select class="form-select" aria-label="Default select example" name="level"
                                    id="level">
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @error('telp')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-12 py-4 text-center">
                                <button class="btn btn-light w-50" type="submit">Registrasi</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <div class="col-7">
			<table class="table">
				<thead>
				  <tr>
					<th scope="col">ID</th>
					<th scope="col">Username</th>
					<th scope="col">Password</th>
					<th scope="col">No Telpon</th>
					<th scope="col">level</th>
					<th scope="col">aksi</th>
				  </tr>
				</thead>
				<tbody class="table-group-divider">
					@foreach ($data as $item)          
					<tr>
					  <td scope="row">{{$item->id_petugas}}</td>
					  <td>{{$item->username}}</td>
					  <td>{{$item->password}}</td>
					  <td>{{$item->telp}}</td>
					  <td>{{$item->level}}</td>
	
					  <td>
						<a href="{{url('petugas/tanggapan/'.$item->id_pengaduan)}}" class="btn btn-warning"><i class="bi bi-pencil-square text-light"></i></a>
					  </td>
					</tr>
					@endforeach
				</tbody>
			</table>
        </div>
    </div>
@endsection
