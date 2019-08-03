<?php

use Illuminate\Support\Facades\Form;
?>
@extends('layouts.menu')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1> 📝Create Siswa</h1>             
       </div>
     </div>
        <form method="POST" action="{{URL::to('siswa')}}">
            @csrf 
            Nama:<br>
            <input type="text" name="name"><br>
            Alamat:<br>
            <input type="text" name="alamat"><br>
            No Hp:<br>
            <input type="text" name="no_hp"><br>
            <br>
            <input class="btn btn-success" type="submit" value="Save">
        </form>
    </div>
@endsection        