@extends('layout.admin')



@section('content')

<link rel="stylesheet" href="{{ asset('template/dist/css/style.css') }}">

  <br><br><br><br><br><div class="card">
    <div class="imgBx">
      <img src="{{ asset('fotopegawai/abik.jpeg') }}">
    </div>
    <div class="content">
      <div class="details">
        <h2>Ahmad Hasby Bik<br><span>UPN Veteran Jatim</span></h2>
        <div class="data">
          <h3>26<br><span>Day</span></h3>
          <h3>05<br><span>Month</span></h3>
          <h3>2002<br><span>Year</span></h3>
        </div>
        <div class="d-flex-2 justify-content-center">
          <a href="https://ahmadhasbybik.vercel.app/" ><i class="fas fa-globe" style="font-size:37px;"></i></a>
          <a href="https://github.com/AhmadHasbyBik" ><i class="fab fa-github" style="font-size:40px;"></i></a>
          <a href="https://instagram.com/hasbybik?igshid=ZGUzMzM3NWJiOQ==" ><i class="fab fa-instagram" style="font-size:40px;"></i></a>
          <a href="https://www.linkedin.com/in/abik-ahmad-3b0745204/" ><i class="fab fa-linkedin" style="font-size:40px;"></i></a>
          
        </div>
      </div>
    </div>
  </div><br><br><br>

  <div class="card">
    <div class="imgBx">
      <img src="{{ asset('fotopegawai/indri.jpeg') }}">
    </div>
    <div class="content">
      <div class="details">
        <h2>Indri Novita Eka Putri<br><span>UPN Veteran Jatim</span></h2>
        <div class="data">
          <h3>01<br><span>Day</span></h3>
          <h3>11<br><span>Month</span></h3>
          <h3>2001<br><span>Year</span></h3>
        </div>
        <div class="d-flex-2 justify-content-center">
          <a href="https://instagram.com/indrnvtaa_?igshid=MzRlODBiNWFlZA==" ><i class="fab fa-instagram" style="font-size:40px;"></i></a>
        </div>
      </div>
    </div>
  </div><br><br><br>

  <div class="card">
    <div class="imgBx">
      <img src="{{ asset('fotopegawai/nadila.jpeg') }}">
    </div>
    <div class="content">
      <div class="details">
        <h2>Nadila Intan Puspitasari<br><span>UPN Veteran Jatim</span></h2>
        <div class="data">
          <h3>28<br><span>Day</span></h3>
          <h3>04<br><span>Month</span></h3>
          <h3>2002<br><span>Year</span></h3>
        </div>
        <div class="d-flex-2 justify-content-center">
          <a href="https://instagram.com/nadilaint_?igshid=MzRlODBiNWFlZA==" ><i class="fab fa-instagram" style="font-size:40px;"></i></a>
        </div>
      </div>
    </div>
  </div>

	
@endsection

@push('scripts')
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet"/>
    <script>$.fn.poshytip={defaults:null}</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
  </body>
@endpush