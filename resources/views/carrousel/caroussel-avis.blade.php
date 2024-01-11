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
        <div class="carousel-item r" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{ asset('defaultimg/images/logo/Logo Toyota.png') }}" alt="ranger rover">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>issa Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </div>
        <div class="carousel-item r" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{ asset('defaultimg/images/logo/Logo Toyota.png') }}" alt="ranger rover">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>Jessica Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </div>
        <div class="carousel-item r" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{ asset('defaultimg/images/logo/Logo Toyota.png') }}" alt="ranger rover">

                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>moussa Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </div>
        <div class="carousel-item r" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{ asset('defaultimg/images/logo/Logo Range rover .png') }}" alt="ranger rover">

                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>ibou Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </div>
        <div class="carousel-item r" href="#">
            <div class="testi">
                <div class="img-area">
            <img src="{{ asset('defaultimg/images/logo/Logo Range rover .png') }}" alt="ranger rover">

                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>ibou Jones</h4>
                <h5>Web Designer</h5>
            </div>
        </div>

   </div>




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
