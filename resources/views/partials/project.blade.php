<div class="container">
    <section class="project">
      <div class="page-section">
        <div class="text-center">
          <h2 class="page-section__title">FEATURED PROJECT</h2>
          <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div>
        <div class="row gutters-50">
          @foreach ($project as $item)
              
          <div class="col-md-4">
            <div class="thumbnail">
              <a href="{{asset('storage/'.$item->photo)}}" target="_blank">
                <img class="img-responsive" src="{{asset('storage/'.$item->photo)}}" alt="">
                <div class="caption">
                  <h4 class="project__title">{{$item->titre}}</h4>
                  <p class="project__paragraph">{{$item->text}}</p>
                </div>
              </a>
            </div>
          </div>
          @endforeach
         
        </div>
        
      </div>
    </section>
  </div>