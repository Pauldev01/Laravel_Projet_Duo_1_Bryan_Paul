@extends('template.second')

@section('content')
<table class="table table-bordered table-dark container mt-5">
    <thead>
      <tr>
        <th scope="col">Copyright</th>
        <th scope="col">Entreprise</th>
        <th scope="col">Droits</th>
        <th scope="col">Conçu par :</th>
        <th scope="col">Equipe</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($footer as $element)    
        <tr>
            <td>{{$element->copyright}}</td>
            <td>{{$element->brand}}</td>
            <td>{{$element->rights}}</td>
            <td>{{$element->designed}}</td>
            <td>{{$element->team}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <form class="container mt-5" action="/footer-store" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Copyright</label>
      <input type="text" name="copyright" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Entreprise</label>
      <input type="text" name="brand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Droits</label>
      <input type="text" name="rights" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Conçu par :</label>
      <input type="text" name="designed" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Equipe</label>
      <input type="text" name="team" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection