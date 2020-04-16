<div class="container">
    <section class="team">
      <div class="page-section text-center">
        <h2 class="page-section__title">CREATIVE TEAM</h2>
        <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="row gutters-50">

          @foreach ($user as $item)
            <div class="col-md-6 col-lg-3">
            <div class="thumbnail">
              <a href="{{asset('storage/'.$item->photo)}}" target="_blank">
                <img src="{{asset('storage/'.$item->photo)}}" alt="">
                <div class="caption team__caption">
                <h4 class="team__name">{{$item->name}}</h4>
                
                <p class="team__title">{{$item->role->role}}</p>
              
                </div>
              </a>
            </div>
          </div>  
          @endforeach
          
        </div>
      </div>
    </section>
  </div>