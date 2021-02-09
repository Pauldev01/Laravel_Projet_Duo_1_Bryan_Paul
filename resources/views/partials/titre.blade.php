{{-- <!-- ======= Header ======= -->
<header id="header" class=" ">
  @foreach ($navbardb as $item)
  <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="{{Route('Welcome')}}">{{$item->title}}</a></h1>

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{Route('Welcome')}}">{{$item->home}}</a></li>
          <li><a href="{{Route('Article')}}">{{$item->article}}</a></li>
          <li><a href="{{Route('Contact')}}">{{$item->contact}}</a></li>
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
    @endforeach
  </header><!-- End Header --> --}}