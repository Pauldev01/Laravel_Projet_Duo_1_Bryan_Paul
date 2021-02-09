@extends('template.second')

@section('content')
  <table class="table table-bordered table-dark container mt-5">
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Paragraphe</th>
        <th scope="col">Icone Adresse</th>
        <th scope="col">Titre Adresse</th>
        <th scope="col">Icone Email</th>
        <th scope="col">Titre Email</th>
        <th scope="col">Icone Telephone</th>
        <th scope="col">Titre Telephone</th>
        <th scope="col">Chargement</th>
        <th scope="col">Réussi</th>
        <th scope="col">Boutton</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contact as $element)
        <tr>
            <td>{{$element->title}}</td>
            <td>{{$element->paragraph}}</td>
            <td>{{$element->iconeAddress}}</td>
            <td>{{$element->titleAddress}}</td>
            <td>{{$element->iconeMail}}</td>
            <td>{{$element->titleMail}}</td>
            <td>{{$element->iconePhone}}</td>
            <td>{{$element->titlePhone}}</td>
            <td>{{$element->loading}}</td>
            <td>{{$element->success}}</td>
            <td>{{$element->btnContact}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <form action="/contact-store" method="POST" class="container mt-5">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Paragraphe</label>
      <input type="text" name="paragraph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Icone Adresse</label>
      <input type="text" name="iconeAddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre Adresse</label>
      <input type="text" name="titleAddress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Icone Email</label>
      <input type="text" name="iconeMail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre Email</label>
      <input type="text" name="titleMail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Icone Telephone</label>
      <input type="text" name="iconePhone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre Telephone</label>
      <input type="text" name="titlePhone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Chargement</label>
      <input type="text" name="loading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Réussi</label>
      <input type="text" name="success" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Boutton</label>
      <input type="text" name="btnContact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection