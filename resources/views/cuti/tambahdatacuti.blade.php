@extends('layout.admin')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <style>
        .kbw-signature {
            width: 100%;
            height: 200px;
        }
    </style>
<body>
	<br>
	<br>
    <h1 class="text-center mb-5 mt-5">Tambah Data Cuti</h1>

    <div class="container mb-5">
    	<div class="row justify-content-center">
    		<div class="col-8">
    			<div class="card">
	    			<div class="card-body">
	    				<form action="/insertdatacuti" method="POST" enctype="multipart/form-data">
	    				  @csrf
						  
						  <div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Nama</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
								  <label class="input-group-text" for="inputGroupSelect01">Options</label>
								</div>
								<select class="custom-select" name="id_employee" id="id_employee">
								  <option selected>Pilih Nama</option>
								  <?php foreach ($datae as $x) : ?>
								  <option value="<?= $x['id'] ?>"><?= $x['nama'] ?></option>
								  <?php endforeach;?>  
								</select>
							</div>
						  </div>
						  <div class="mb-3">
							<input type="hidden" id="nama" name="nama" class="form-control" readonly>
						  </div>
						  <div class="mb-3">
							<input type="hidden" id="nip" name="nip" class="form-control" readonly>
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
							<input type="text" id="jabatan" name="jabatan" class="form-control" readonly>
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
						    <input type="number" name="notelepon" class="form-control" id="notelepon" aria-describedby="emailHelp" readonly>
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Masa Kerja</label>
						    <input type="text" name="masakerja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Alasan Cuti</label>
						    <input type="text" name="alasancuti" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Alamat Cuti</label>
						    <input type="text" name="alamatcuti" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
						    <input type="date" name="tgl_awal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Tanggal Berakhir</label>
						    <input type="date" name="tgl_akhir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputEmail1" class="form-label">Tanda tangan</label>
							<div id="signaturePad"></div>
								<div class="text-right">
									<button id="clear" class="btn btn-danger btn-sm">Clear</button>
								</div>
                            <textarea id="signature64" name="ttd" style="display: none"></textarea>
						  </div>
						  <button type="submit" class="btn btn-primary pr-3">Simpan</button>
						</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
	<script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
	<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script type="text/javascript">
       var signaturePad = $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
		$('#clear').click(function(e) {
		e.preventDefault();
		signaturePad.signature('clear');
		$("#signature64").val('');
		});
    </script>
	<script>
    $('#id_employee').change(function() {
        var id = $(this).val();
        var url = '{{ route("getDetails", ":id") }}';
        url = url.replace(':id', id);

        $.ajax({
            url: url,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                if (response != null) {
                    $('#nama').val(response.nama);
					$('#nip').val(response.nip);
                    $('#jabatan').val(response.jabatan);
					$('#notelepon').val(response.notelepon);
                }
            }
        });
    });
	</script>
@endsection