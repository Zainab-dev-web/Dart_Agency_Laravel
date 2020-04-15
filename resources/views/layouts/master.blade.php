<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dart - page</title>
  <meta name="keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.">
  
  
  {{-- <link rel="stylesheet" href="assets/flat-icon/flaticon.css"> --}}
  {{-- <link rel="stylesheet" href="temp/styles/styles.css"> --}}
  <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
  <div class="main-wrapper">
      @yield('content')
</div>



<script src="{{asset('js/app.js')}}"></script>

{{-- <script src="assets/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script> --}}

<script>
    $(document).ready(function() {

    var $videoSrc = $("#video").attr("src");

    $('#myModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src',$videoSrc); 
    });



    });
</script>
</body>
</html>



