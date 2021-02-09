<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/backoffice">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/article">Article</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/boContact">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/boInformations">Informations</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/boFooter">Footer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/boNetworks">Social Networks</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>    
    <section>
        @yield('content')
    </section>


    <script src="{{asset("js/app.js")}}"></script>
</body>
</html>