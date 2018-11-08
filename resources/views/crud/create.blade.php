@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('crud')}}">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="nama" name="nama">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Asal</label>
      <div class="col-sm-10">
        <form action="/">
		  <select name="asal">
			<option value="Yogyakarta">Yogyakarta</option>
			<option value="Surakarta">Surakarta</option>
			<option value="Jakarta">Jakarta</option>
			<option value="Purwakarta">Purwakarta</option>
		  </select>
		  <br><br>
		</form>
      </div>
    </div>
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Tujuan</label>
      <div class="col-sm-10">
         <form action="/">
		  <select name="tujuan">
			<option value="Yogyakarta">Yogyakarta</option>
			<option value="Surakarta">Surakarta</option>
			<option value="Jakarta">Jakarta</option>
			<option value="Purwakarta">Purwakarta</option>
		  </select>
		  <br><br>
		</form>
      </div>
    </div>
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Waktu</label>
      <div class="col-sm-10">
		 <form action="/">
		  <input type="date" name="waktu">
		</form>
      </div>
    </div>
	<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Jumlah Penumpang</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="jumlahpenumpang" name="jumlahpenumpang">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection