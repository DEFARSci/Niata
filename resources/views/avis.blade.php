
    <!-- Compiled and minified CSS -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}

<div id="avis" class=" carousel slide t " data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item r active">
        <div class="img-area">
            <img src="{{ asset('defaultimg/images/logo/Logo Range rover .png') }}" alt="ranger rover">
        </div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>issa Jones</h4>
                <h5>Web Designer</h5>

        </div>
      <div class="carousel-item r">
        <div class="img-area">
            <img src="{{ asset('defaultimg/images/logo/Logo Range rover .png') }}" alt="ranger rover">

        </div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>issa Jones</h4>
                <h5>Web Designer</h5>
      </div>
      <div class="carousel-item r">
        <div class="img-area">
            <img src="./images/logo/Logo Range rover .png" alt="ranger rover">
        </div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est, alias recusandae."</p>
                <h4>issa Jones</h4>
                <h5>Web Designer</h5>
      </div>
    </div>
  </div>

  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#avis').carousel({
            padding: 200
    });
    autoplay();
    function autoplay() {
        $('#avis').carousel('next');
        setTimeout(autoplay, 4500);
    }
  });
  </script>

<style>
    /* body {
	margin: 0;
	padding: 0;
    background: #000000;
} */
#avis {
    height: 390px;
    perspective: 250px;
    box-shadow: -15px 15px 15px -4px #10101040;

}
#avis{
	width: 408px;
    background: #3f3e3e1f;
	padding: 50px;
	height: auto;
	text-align: center;
    border-radius: 15px;
}
.img-area {
	width: 100px;
	height: 50px;
	margin: 0 auto;
	overflow: hidden;
	border-radius: 4px
	/* border: inset 8px deepskyblue; */

}
 .img-area img{
      width: 100%;
     }
 .carousel-item p {
	color: #f7f3f3;
	font-size: 18px;
	line-height: 1.9;
}
.carousel-item h4,h5 {
	font-size: 20px;
	margin: 0;
	color: #fffbfb;
}
.carousel-item h5 {
	font-size: 14px;
	letter-spacing: 5px;
	margin: 7px 0;

}


</style>
