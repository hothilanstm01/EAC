<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAC Travel</title>

    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/wherewewillgo.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/comment.css">
    <link rel="stylesheet" href="css/rating.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet"> <!-- font-family: 'Alice', serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet"> <!-- font-family: 'Exo', sans-serif;-->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- scoll -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
</head>
<body>

      <?php
        session_start();
      ?>



        <?php

            $ctrl='home';
            if(isset($_GET['ctrl'])){
                $ctrl = $_GET['ctrl'];
            }

            include 'controller/'.$ctrl.'.php';

        ?>


    <!-- footer -->

    <div class="full">
            <footer>
               <div class="full">
                    <div class="title_ft">
                            <span>FIND US</span> <br>
                            Hãy liên hệ với chúng tôi
                    </div>
               </div>

               <div class="full">
                   <div class="content_ft">
                       <div class="boxft">

                            <div class="left_ft">
                                  <i class="fas fa-phone-square"></i>
                            </div>

                            <div class="right_ft">
                                <span>PHONE</span> <br>
                                <br>
                                +359 2 88 55 999 <br>
                                +359 89 88 55 999 <br>
                            </div>

                       </div>

                       <div class="boxft ml20">

                            <div class="left_ft">
                              <i class="fas fa-map-marker-alt"></i>
                            </div>

                            <div class="right_ft">
                                <span>OFFICE ADDRESS</span>
                                <br> <br>
                                4 Byala Cherkva Str. <br>
                                3rd Floor <br>
                                Sofia, 1000, <br>
                                Bulgaria <br>
                            </div>

                       </div>

                       <div class="boxft ml20">

                            <div class="left_ft">
                                <i class="fas fa-envelope"></i>
                            </div>

                            <div class="right_ft">
                                <span>EMAILS</span> <br> <br>

                                office@trendy.com <br>
                                sales@trendy.com <br>
                            </div>

                       </div>

                   </div>
               </div>
            </footer>
        </div>

    <!-- end footer -->


<script>
  $('[data-toggle="tooltip-abc"]').tooltip()
</script>
                 <!-- jquery -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>


    $('.tr').slick({

infinite: true,
slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  adaptiveHeight:false,
  dots:true,
  dotClass:'slick-dots',
  nextArrow:$('.next'),
  prevArrow:$('.prev'),

  responsive: [
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
        mobileFirst:true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst:true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        settings: "unslick",
        mobileFirst:true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]

});




</script>


<script>

$('.center').slick({
  infinite: true,
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  autoplay:false,
  arrows:true,
  prevArrow:$('.prevwwg'),
  nextArrow:$('.nextwwg'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

</script>
<!-- /* phan slideshow header */ -->
<!-- slideshow header -->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active_header", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active_header";
}


</script>


<!-- phan script nav fixed -->
<script>
function startTime(){
   var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        h=checkTime(h);
        m=checkTime(m);
        document.getElementById('time').innerHTML =h + ":" +m;
        var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>

<!-- phan text script -->
<script>
  $(document).ready(function() {

  typing( 0, $('.typewriter-text').data('text') );

  function typing( index, text ) {

    var textIndex = 1;

    var tmp = setInterval(function() {
      if ( textIndex < text[ index ].length + 1 ) {
				$('.typewriter-text').text( text[ index ].substr( 0, textIndex ) );
				textIndex++;
			} else {
        setTimeout(function() { deleting( index, text ) }, 2000);
        clearInterval(tmp);
      }

		}, 100);

	}

	function deleting( index, text ) {

    var textIndex = text[ index ].length;

    var tmp = setInterval(function() {

      if ( textIndex + 1 > 0 ) {
        $('.typewriter-text').text( text[ index ].substr( 0, textIndex ) );
        textIndex--;
      } else {
        index++;
        if ( index == text.length ) { index = 0; }
        typing( index, text );
        clearInterval(tmp);
      }

		}, 50)

  }

});
</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var cancel=document.getElementById("cancel");
// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

cancel.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";

  }

}
</script>

</body>
</html>
