<footer class="footer footer--bg">
    <div class="container">
      <div class="page-section">
        <div class="row gutters-100">
          <div class="col-md-4 col-lg-3">
            <div class="footer__first">
              <h2 class="footer__title">DART AGENCY</h2>
              <p class="footer-first__paragraph">Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
              <ul class="footer-first__social-icons">
                <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                <li><a href="#"><i class="flaticon-twitter-logo"></i></a></li>
                <li><a href="#"><i class="flaticon-dribbble-logo"></i></a></li>
                <li><a href="#"><i class="flaticon-behance-logo"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="footer__second">
              <h2 class="footer__title">QUICK LINK</h2>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="footer__third">
              <h2 class="footer__title">CONTACT US</h2>
              <ul>
                @foreach ($contact as $item)
              <li><span class="glyphicon glyphicon-envelope"></span> <a href="#">{{$item->adresse}}</a></li>
              <li><span class="glyphicon glyphicon-earphone"></span> <a href="#">{{$item->numero}}</a></li>
                @endforeach
              </ul>
              <h4 class="footer__subscribe__title">Subscribe</h4>
              <div class="subscribe-section">
                <input type="email" class="form-control" size="50" placeholder="Enter Your Email" required>
                <button class="subscribe-section__button" type="button"><img src="{{asset("/images/send-icon.png")}}" alt=""></button>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="footer__fourth">
              <h4 class="footer__title">INSTAGRAM</h4>
              <div class="row">
                <ul>
                  <li><a href="#"><img src="{{asset("/images/instagram-pic1.png")}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset("/images/instagram-pic2.png")}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset("/images/instagram-pic3.png")}}" alt=""></a></li>
                </ul>
              </div>
              <div class="row">
                <ul>
                  <li><a href="#"><img src="{{asset("/images/instagram-pic4.png")}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset("/images/instagram-pic5.png")}}" alt=""></a></li>
                  <li><a href="#"><img src="{{asset("/images/instagram-pic6.png")}}" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="footer__horizontal-bar">
        <p class="footer__bottom-paragraph">&copy; Copyright 2017 <a href="#" style="color: #00aafe;font-weight:bold;">DartThemes</a>. All Rights Reserved</p>
      </div>
    </div>
  </footer>