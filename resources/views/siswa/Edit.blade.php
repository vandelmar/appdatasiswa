@extends('layouts.app')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1> ✍️Edit Siswa</h1>             
       </div>
     </div>
      <form method="POST" action="/siswa/{{$siswa->id}}">
        @method('PUT')
        @csrf
        Nama<br>
        <input type="text" name="name" value="{{$siswa->name}}">
        <br>
        Alamat<br>
        <input type="text" name="alamat" value="{{$siswa->alamat}}">
        <br>
        No HP<br>
        <input type="text" name="no_hp" value="{{$siswa->no_hp}}">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Save">
      </form>
    </div>
  @endsection 
        

