<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="UTF-8">
    <title>How to 3D Testimonial Carousel using Materialize CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>


    <div class="carousel t">
        @foreach ($avis as $avis )
        <div class="carousel-item r" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{ asset('temoignage/'.$avis->image.'') }}" alt="ranger rover"  style="width: 50px; height: 50px;border-radius: 50%; ">
                </div>
                <p>
                    {{ Str::limit(htmlspecialchars_decode(strip_tags($avis->message)), 95) }}

                </p>
                <h4>{{ $avis->prenom.' '.$avis->nom }}</h4>
                <h5>{{ $avis->domaine }}</h5>
            </div>
        </div>
        @endforeach



   </div>


   {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}


    <script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
  $(document).ready(function(){
    $('.carousel').carousel({
			padding: 200
	});
	autoplay();
	function autoplay() {
		$('.carousel').carousel('next');
		setTimeout(autoplay, 4500);
	}
  });
</script>
</body>

</html>
