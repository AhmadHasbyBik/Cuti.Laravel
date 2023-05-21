@extends('layout.admin')
@section('content')
<body>
	<br>
	<br>
    <h1 class="text-center mb-5 mt-5">Edit Data Pegawai</h1>

    <div class="container mb-5">
    	<div class="row justify-content-center">
    		<div class="col-8">
    			<div class="card">
	    			<div class="card-body">
	    				<form action="/updatedatacuti/{{ $data->id }}" method="POST" enctype="multipart/form-data">
	    				  @csrf
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Nama</label>
						    <input readonly type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nama}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">NIP</label>
						    <input type="text" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nip}}">
						  </div>
						  <div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Jabatan</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								  <label class="input-group-text" for="inputGroupSelect01">Options</label>
								</div>
								<select class="custom-select" name="jabatan" id="inputGroupSelect01">
								  <option selected>{{$data->jabatan}}</option>
								  <option value="Anggota">Anggota</option>
								  <option value="Kepala Bidang Keuangan">Kepala Bidang Keuangan</option>
								  <option value="Kepala Bidang Pariwisata">Kepala Bidang Pariwisata</option>
								  <option value="Kepala Bidang Kebudayaan">Kepala Bidang Kebudayaan</option>
							  	  <option value="Sekretaris Dinas Pariwisata dan Kebudayaan">Sekretaris Dinas Pariwisata dan Kebudayaan</option>
								</select>
							</div>
						  </div>
						<div class="mb-3">
						  <label for="exampleInputEmail1" class="form-label">Masa Kerja</label>
						  <input type="text" name="masakerja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->masakerja}}">
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Alasan Cuti</label>
							<input type="text" name="alasancuti" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->alasancuti}}">
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
							<input type="date" name="tgl_awal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->tgl_awal}}">
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Tanggal Berakhir</label>
							<input type="date" name="tgl_akhir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->tgl_akhir}}">
						</div>
						<div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
						    <input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->notelepon}}">
						</div>
						
						  <button type="submit" class="btn btn-primary">Simpan</button>
						</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

@endsection