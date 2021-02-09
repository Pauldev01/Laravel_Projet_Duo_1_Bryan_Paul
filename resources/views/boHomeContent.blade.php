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
        @foreach ($homeContent as $item)
        <td>{{$item ->iconvalidate}}</td>
        <td>{{$item ->texticon1}}</td>
        <td>{{$item ->texticon2}}</td>
        <td>{{$item ->texticon3}}</td>
        <td>{{$item ->iconvalidate2}}</td>
        <td>{{$item ->texticon4}}</td>
        <td>{{$item ->texticon5}}</td>
        <td>{{$item ->texticon6}}</td>
            
        
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