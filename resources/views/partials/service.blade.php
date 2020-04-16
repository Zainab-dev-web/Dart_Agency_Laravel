<section class="service">
    <div class="container">
      <div class="page-section text-center">
        <h2 class="page-section__title">SERVICES WE OFFER</h2>
        <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <div class="row gutters-40">
          @foreach ($service as $item)
            <div class="col-md-4">
            <div class="thumbnail">
            <i class="material-icons">{{$item->icone}}</i>
            <h4 class="service__title">{{$item->titre}}</h4>
            <p class="service__paragraph">{{$item->text}}</p>
            </div>
          </div>  
          @endforeach
        </div>
        
          
        </div>
      </div>
    </div>
  </section>
  