@extends('layout.admin')
@section('content')
<body>
	<br>
	<br>
    <h1 class="text-center mb-5 mt-5">Edit Data Surat Perjalanan Dinas</h1>

    <div class="container mb-5">
    	<div class="row justify-content-center">
    		<div class="col-8">
    			<div class="card">
	    			<div class="card-body">
	    				<form action="/updatedataspd/{{ $data->id }}" method="POST" enctype="multipart/form-data">
	    				  @csrf
						  <div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Nama</label>
						    <input readonly type="text" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nama}}">
						  </div>
						  
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">NIP</label>
						    <input type="text" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nip}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Nomor Surat</label>
						    <input type="text" name="no_srt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->no_srt}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Pangkat dan Golongan</label>
						    <input type="text" name="pangkat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->pangkat}}">
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
						    <label for="exampleInputEmail1" class="form-label">Tingkat Biaya Perjalanan Dinas</label>
						    <input type="text" name="tingkat_biaya" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->tingkat_biaya}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Maksud Perjalanan Dinas</label>
						    <input type="text" name="perjalanan_dinas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->perjalanan_dinas}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Alat Angkutan yang dipergunakan</label>
						    <input type="text" name="kendaraan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->kendaraan}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Tempat Berangkat</label>
						    <input type="text" name="tempat_berangkat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->tempat_berangkat}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Tempat Tujuan</label>
						    <input type="text" name="tempat_tujuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->tempat_tujuan}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Lama Perjalanan</label>
						    <input type="text" name="lama_perjalanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->lama_perjalanan}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Tanggal Berangkat</label>
						    <input type="date" name="tgl_berangkat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->tgl_berangkat}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
						    <input type="date" name="tgl_kembali" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->tgl_kembali}}">
						  </div>
						  <div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Instansi</label>
						    <div class="input-group mb-3">
								<div class="input-group-prepend">
								  <label class="input-group-text" for="inputGroupSelect01">Options</label>
								</div>
								<select class="custom-select" name="instansi" id="inputGroupSelect01">
								  <option selected>{{$data->instansi}}</option>
								  <option value="Disparbud Kabupaten Gresik">Disparbud Kabupaten Gresik</option>
								</select>
							</div> 
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Kode Rekening</label>
						    <input type="text" name="kode_rekening" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->kode_rekening}}">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Keterangan Lain</label>
						    <input type="text" name="keterangan_lain" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->keterangan_lain}}">
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