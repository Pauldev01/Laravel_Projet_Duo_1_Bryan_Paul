@extends('template.main');

@section('content')

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">
              @foreach ($contactDB as $element)
                  
              <div class="section-title">
                <h2>{{$element->title}}</h2>
                <p>{{$element->paragraph}}</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-6">
      
                  <div class="row">
                    <div class="col-md-12">
                      <div class="info-box">
                        <i class="{{$element->iconeAddress}}"></i>
                        <h3>{{$element->titleAddress}}</h3>
                        <p>{{$element->address}}</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="{{$element->iconeMail}}"></i>
                        <h3>{{$element->titleMail}}</h3>
                        <p>{{$element->mail1}}<br>{{$element->mail2}}</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-box mt-4">
                        <i class="{{$element->iconePhone}}"></i>
                        <h3>{{$element->titlePhone}}</h3>
                        <p>{{$element->number1}}<br>{{$element->number2}}</p>
                      </div>
                    </div>
                  </div>
      
                </div>
      
                <div class="col-lg-6 mt-4 mt-lg-0">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                      <div class="loading">{{$element->loading}}</div>
                      <div class="error-message"></div>
                      <div class="sent-message">{{$element->success}}</div>
                    </div>
                    <div class="text-center"><button type="submit">{{$element->btnContact}}</button></div>
                  </form>
                </div>
      
              </div>

              @endforeach
            </div>
          </section><!-- End Contact Section -->
          
@endsection