<footer>
    <div class="container d-md-flex py-4">
      @foreach ($footerDB as $element)    
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; {{$element->copyright}} <strong><span>{{$element->resi}}</span></strong>{{$element->rights}}
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/resi-free-bootstrap-html-template/ -->
            {{$element->designed}} <a href="https://bootstrapmade.com/">{{$element->company}}</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="{{$element->icone1}}"></i></a>
          <a href="#" class="facebook"><i class="{{$element->icone2}}"></i></a>
          <a href="#" class="instagram"><i class="{{$element->icone3}}"></i></a>
          <a href="#" class="google-plus"><i class="{{$element->icone4}}"></i></a>
          <a href="#" class="linkedin"><i class="{{$element->icone5}}"></i></a>
        </div>
      @endforeach
    </div>      
</footer>
