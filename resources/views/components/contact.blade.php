<section class="contact contact--bg">
    <div class="container">
      <div class="page-section text-center">
        <h2 class="page-section__title--white">We Always Work To Make A Difference</h2>
        <p class="page-section__paragraph--white">If you like our works and have a project,contact us now</p>
      <form action="{{route('mailForm.store')}}" method="post">
          @csrf
          <div class="form-row text-center">
            <div class="form-group col-md-4 mx-auto">
                <label for="">Nom</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@if($errors->first('name')) 
                @else{{old('name')}}@endif"/>
                <div class="validation"></div>
            </div>
              @error('name')  
              <div class="text-danger">{{ $message }}</div>  
              @enderror

              <div class="form-group col-md-4 mx-auto ">
                <label for="">Prénom</label>
                <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="@if($errors->first('prenom')) 
                @else{{old('prenom')}}@endif"/>
                <div class="validation"></div>
            </div>
              @error('prenom')  
              <div class="text-danger">{{ $message }}</div>  
              @enderror
              <div class="form-group col-md-4 mx-auto">
                <label for="">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="@if($errors->first('email')) 
                @else{{old('email')}}@endif"/>
                <div class="validation"></div>
            </div>
              @error('email')  
              <div class="text-danger">{{ $message }}</div>  
              @enderror
              <button class="button button--hover" type="submit">CONTACT US</button>
        </form>
       
      </div>
    </div>
  </section>