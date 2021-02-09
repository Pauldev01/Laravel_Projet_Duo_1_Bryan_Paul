@extends('template.second')

@section('content')
<table class="table table-bordered table-dark container mt-5">
    <thead>
      <tr>
        <th scope="col">Adresse</th>
        <th scope="col">Email 1</th>
        <th scope="col">Email 2</th>
        <th scope="col">Numéro de téléphone 1</th>
        <th scope="col">Numéro de téléphone 2</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($information as $element) 
        <tr>
            <td>{{$element->address}}</td>
            <td>{{$element->mail1}}</td>
            <td>{{$element->mail2}}</td>
            <td>{{$element->number1}}</td>
            <td>{{$element->number2}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <form class="container mt-5" action="/information-store" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Adresse</label>
      <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email 1</label>
      <input type="text" name="mail1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email 2</label>
      <input type="text" name="mail2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Numéro de téléphone 1</label>
      <input type="text" name="number1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Numéro de téléphone 2</label>
      <input type="text" name="number2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection