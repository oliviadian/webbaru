@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nama Pemesan</th>
        <th>Asal</th>
        <th>Tujuan</th>
		<th>Waktu</th>
        <th>Jumlah Penumpang</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['nama']}}</td>
        <td>{{$post['asal']}}</td>
        <td>{{$post['tujuan']}}</td>
        <td>{{$post['waktu']}}</td>
        <td>{{$post['jumlahpenumpang']}}</td>
        <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
       <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection