@extends('template.second')

@section('content')
<table class="table table-bordered table-dark container mt-5">
    <thead>
      <tr>
        <th scope="col">Twitter</th>
        <th scope="col">Facebook</th>
        <th scope="col">Instagram</th>
        <th scope="col">Skype</th>
        <th scope="col">LinkedIn</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($network as $element)    
        <tr>
            <td>{{$element->twitter}}</td>
            <td>{{$element->facebook}}</td>
            <td>{{$element->instagram}}</td>
            <td>{{$element->skype}}</td>
            <td>{{$element->linkedin}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <form class="container mt-5" action="/network-store" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Twitter</label>
      <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Facebook</label>
      <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Instagram</label>
      <input type="text" name="instagram" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Skype</label>
      <input type="text" name="skype" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">LinkedIn</label>
      <input type="text" name="linkedin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection