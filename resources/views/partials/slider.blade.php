<div class="container">
    <section class="slider">
      <div class="page-section text-center">
        <h2 class="page-section__title">WHAT CLIENT SAY?</h2>
        <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            
            @foreach ($testi as $item)
            <div class="item @if($item->id==1) active @endif">

              <img class="img-responsive slider__image" src="{{asset('storage/'.$item->photo)}}" alt="">
            <p class="slider__paragraph">{{$item->text}}</p>
            <h3 class="slider__name">{{$item->name}}</h3>
            <p class="slider__title">{{$item->titre}}</p>
          </div>
          @endforeach
            
            
          </div>
          
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="material-icons">chevron_left</i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="material-icons">chevron_right</i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
  </div>