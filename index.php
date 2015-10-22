<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <meta charset="utf-8">
  <title>Your Taxy Easy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">  
  <script src="js/jquery-1.11.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/general.js"></script>
  <script src="js/pace.js"></script>
  <script src="js/viewportchecker.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/scrollmagic.js"></script>
  <script src="https://greensock.com/js/src/TweenMax.min.js"></script>
  <script src="js/animation.gsap.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/mobile.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/pace.css" rel="stylesheet">
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container-fluid">
    <div class="row video-content">
        <video autoplay loop poster="polina.jpg" id="bgvid">
            <source src="video/polina.webm" type="video/webm">
            <source src="video/polina.mp4" type="video/mp4">
        </video> 
    </div>
    
    <div class="row content_users" style="height:400px;" id="trigger1">
      <div class="container">
        <div class="col-xs-3 first_effect"> <img src="images/user1.jpg" class="img-circle img-responsive">
          <div class="text-center">
          <strong>Boss</strong>
        </div> 
      </div>
        <div class="col-xs-3 second_effect"> <img src="images/user2.jpg" class="img-circle img-responsive">
          <div class="text-center">
          <strong>Boss</strong>
        </div> 
      </div>
        <div class="col-xs-3 first_effect"> <img src="images/user3.jpg" class="img-circle img-responsive">
          <div class="text-center">
          <strong>Boss</strong>
        </div> 
      </div>
        <div class="col-xs-3 second_effect"> <img src="images/user4.jpg" class="img-circle img-responsive">
          <div class="text-center">
          <strong>Boss</strong>
        </div> 
      </div>
      </div>
    </div>
    <img src="images/taxi_scroll.png" alt="" id="animate1" style="position:relative;">
    <div class="row home_parallax_one" >
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto esse quis harum similique blanditiis, tempora nobis aliquam exercitationem minus totam fugit rerum, ad ipsa nulla cupiditate quibusdam. Esse, quidem quasi.
    </div>
    
    <div class="row" style="height:400px; ">
      <div class="col-xs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatum tempora eos cum quas ea, architecto repellat culpa rem quasi nim? Voluptas ab cumque rerum mollitia soluta voluptatem est!</div>
      <div class="col-xs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatum tempora eos cum quas ea, architecto repellat culpa rem quasi nim? Voluptas ab cumque rerum mollitia soluta voluptatem est!</div>
      <div class="col-xs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatum tempora eos cum quas ea, architecto repellat culpa rem quasi nim? Voluptas ab cumque rerum mollitia soluta voluptatem est!</div>
    </div>
  
   <div class="row home_parallax_two">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto esse quis harum similique blanditiis, tempora nobis aliquam exercitationem minus totam fugit rerum, ad ipsa nulla cupiditate quibusdam. Esse, quidem quasi.
    </div> 

     <div class="row" style="height:400px; ">
      <div class="col-xs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatum tempora eos cum quas ea, architecto repellat culpa rem quasi nim? Voluptas ab cumque rerum mollitia soluta voluptatem est!</div>
      <div class="col-xs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatum tempora eos cum quas ea, architecto repellat culpa rem quasi nim? Voluptas ab cumque rerum mollitia soluta voluptatem est!</div>
      <div class="col-xs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatum tempora eos cum quas ea, architecto repellat culpa rem quasi nim? Voluptas ab cumque rerum mollitia soluta voluptatem est!</div>
    </div>

  


  </div>
  <script>
    Pace.on('done',function(){
        setTimeout(function(){
            $('.pace.pace-inactive .pace-activity').fadeOut();
            $('.loading').addClass('animated rotateOut');
            $('.rotateOut').remove();
            $('header').css('opacity',1);
        },2000);
    });
    var controller = new ScrollMagic.Controller();
   
    var tween = TweenMax.fromTo("#animate1", 1,
                  {left: -0},
                  {left: 1500, repeat: -1, yoyo: true, ease: Circ.easeInOut, delay: 2, repeatDelay: 3 }
                );

    // build scene
    var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 600, offset: 100})
            .setTween(tween)
            .addIndicators({name: "loop"}) // add indicators (requires plugin)
            .addTo(controller);
</script>
</body>
<div class="loading"><div class="loading_child"></div></div>
</html>