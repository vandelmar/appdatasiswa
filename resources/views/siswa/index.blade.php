@extends ('layouts.menu')

 @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><a href="{{URL::to('/siswa')}}">Semua Siswa</a></h1>       
          
        </div>
      </div>
    
      {{-- <p scope="col" class="col-md-1">
          <a type="text" href="/create">📝Create Siswa</a>
      <div scope="col" style="float:right">
        <form class="form-inline mb-2">
          <div class="form-group">
              <input type="text" name="search" class="form-control" placeholder="Search here ...">
              <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </form>
      </div>
    </p> --}}
      <table>
        <tbody>  
          <tr>
              <td scope="col" class="col-md-1">
                  <a type="text" href="/create">📝Create Siswa</a>
              </td>
              <td scope="col">
                <form class="form-inline">
                  <div class="form-group">
                      <input type="text" name="search" class="form-control" placeholder="Search here ...">
                      <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </form>
              </td>
          </tr>
        </tbody>
      </table>
                   
        <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col" colspan="3" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($siswa as $key => $value)
              <tr>
                <td class="text-center">{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->alamat}}</td>
                <td>{{$value->no_hp}}</td>
                <td class="text-center"><a class="btn btn-small btn-success" href="{{URL::to('siswa/' . $value->id)}}">📂View</a></td>
                <td class="text-center"><a class="btn btn-small btn-primary" href="{{URL::to('siswa/' . $value->id . '/edit')}}">✍️Edit</a></td> 
                <td class="text-center"><a>

                    <form method="POST" action="/siswa/{{$value->id}}">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn btn-small btn-danger" onclick="return confirm('Are you sure?')">Delete</button>              
                    </form>
                    </a>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5"> Data not found.</td>
              </tr>
              @endforelse
            </tbody>
        </table>
    </div>
@endsection
