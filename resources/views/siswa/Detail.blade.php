@extends('layouts.menu')

@section('content')
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <h1>Menampilkan {{$siswa->name}}</h1>            
       </div>
     </div>      

        <div class="jumbroton text-center">
            <h1><strong> {{$siswa->name}} </strong></h1>
            <p>
                <h2>Alamat : {{$siswa->alamat}} </h2>
                <h2>No HP : {{$siswa->no_hp}} </h2>
                <a>Created_at : {{$siswa->created_at}}</a><br>
                <a>Updated_at : {{$siswa->updated_at}}</a>
            </p>
        </div>
    </div>
@endsection 
