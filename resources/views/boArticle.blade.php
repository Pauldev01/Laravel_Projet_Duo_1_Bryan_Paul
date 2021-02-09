@extends('template.second')

@section('content')
<table class="table table-bordered table-dark container mt-5">
    <thead>
      <tr>
        {{-- <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach ($article as $item)
          
      <tr>
        <td>{{$item ->title}}</td>
        <td>{{$item ->number}}</td>
        <td>{{$item ->subtitle}}</td>
        <td>{{$item ->paragraph}}</td>

        <td>{{$item ->title2}}</td>
        <td>{{$item ->number2}}</td>
        <td>{{$item ->subtitle2}}</td>
        <td>{{$item ->paragraph2}}</td>

        <td>{{$item ->title3}}</td>
        <td>{{$item ->number3}}</td>
        <td>{{$item ->subtitle3}}</td>
        <td>{{$item ->paragraph3}}</td>

        <td>{{$item ->title4}}</td>
        <td>{{$item ->number4}}</td>
        <td>{{$item ->subtitle4}}</td>
        <td>{{$item ->paragraph4}}</td>

        <td>{{$item ->title5}}</td>
        <td>{{$item ->number5}}</td>
        <td>{{$item ->subtitle5}}</td>
        <td>{{$item ->paragraph5}}</td>

        <td>{{$item ->title6}}</td>
        <td>{{$item ->number6}}</td>
        <td>{{$item ->subtitle6}}</td>
        <td>{{$item ->paragraph6}}</td>
      </tr>
      @endforeach
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