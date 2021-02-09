@extends('template.second')

@section('content')
<table class="table table-bordered table-dark container mt-5">
    <thead>
      {{-- <tr>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr> --}}
    </thead>
    <tbody>
      <tr>
        @foreach ($home as $item)
        <td>{{$item ->marketing}}</td>
        <td>{{$item ->image}}</td>
        <td>{{$item ->btn1}}</td>
        <td>{{$item ->btn2}}</td>
        <td>{{$item ->marketing2}}</td>
        <td>{{$item ->textunder}}</td>
        <td>{{$item ->image2}}</td>
        <td>{{$item ->paragraphe}}</td>
        <td>{{$item ->finalpara}}</td>
            
        
        @endforeach
      </tr>
    </tbody>
  </table>

  <form>
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection