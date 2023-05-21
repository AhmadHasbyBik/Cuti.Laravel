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
	    				<form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
	    				  @csrf
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">NIP</label>
						    <input type="text" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nip}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Nama</label>
						    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nama}}">
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
							<label for="exampleInputEmail1" class="form-label">Golongan</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								  <label class="input-group-text" for="inputGroupSelect01">Options</label>
								</div>
								<select class="custom-select" name="golongan" id="inputGroupSelect01">
								  <option selected>{{$data->golongan}}</option>
								  <option value="Tidak Ada">Tidak Ada</option>
								  <option value="I/a">I/a</option>
								  <option value="I/b">I/b</option>
								  <option value="I/c">I/c</option>
								  <option value="I/d">I/d</option>
								  <option value="II/a">II/a</option>
								  <option value="II/b">II/b</option>
								  <option value="II/c">II/c</option>
								  <option value="II/d">II/d</option>
								  <option value="III/a">III/a</option>
								  <option value="III/b">III/b</option>
								  <option value="III/c">III/c</option>
								  <option value="III/d">III/d</option>
								  <option value="IV/a">IV/a</option>
								  <option value="IV/b">IV/b</option>
								  <option value="IV/c">IV/c</option>
								  <option value="IV/d">IV/d</option>
								  <option value="V/a">V/a</option>
								  <option value="V/b">V/b</option>
								  <option value="V/c">V/c</option>
								  <option value="V/d">V/d</option>
								  <option value="VI/a">VI/a</option>
								  <option value="VI/b">VI/b</option>
								  <option value="VI/c">VI/c</option>
								  <option value="VI/d">VI/d</option>
								</select>
							</div>
						  </div>
						  <div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Bidang</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								  <label class="input-group-text" for="inputGroupSelect01">Options</label>
								</div>
								<select class="custom-select" name="bidang" id="inputGroupSelect01">
								  <option selected>{{$data->bidang}}</option>
								  <option value="Sekretariat">Sekretariat</option>
								  <option value="Kebudayaan">Kebudayaan</option>
								  <option value="Ekonomi Kreatif">Ekonomi Kreatif</option>
								  <option value="Pariwisata">Pariwisata</option>
								  <option value="Kepemudaan dan Olahraga">Kepemudaan dan Olahraga</option>
								</select>
							</div>
						  </div>
						  <div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								  <label class="input-group-text" for="inputGroupSelect01">Options</label>
								</div>
								<select class="custom-select" name="jeniskelamin" id="inputGroupSelect01">
								  <option selected>{{$data->jeniskelamin}}</option>
								  <option value="Laki-laki">Laki-laki</option>
							  	  <option value="Perempuan">Perempuan</option>
								</select>
							</div>
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
						    <input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->notelepon}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
						    <input type="file" name="foto" class="form-control" value="{{$data->foto}}">
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