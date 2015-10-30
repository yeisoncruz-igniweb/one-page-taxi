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
  <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script> -->
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
      <div class="container" style="margin-top:20px;">
          <div class="row">
              <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4">
                <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
              </div><!-- /.col-lg-4 -->
          </div>
      </div>
    </div>

   <div class="row home_parallax_two">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto esse quis harum similique blanditiis, tempora nobis aliquam exercitationem minus totam fugit rerum, ad ipsa nulla cupiditate quibusdam. Esse, quidem quasi.
    </div>

     <div class="row" style="height:400px; ">
       <div class="container">
           <div class="row">
               <div class="col-md-4">
                 <h2>Heading</h2>
                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                 <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
               </div>
               <div class="col-md-4">
                 <h2>Heading</h2>
                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                 <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
              </div>
               <div class="col-md-4">
                 <h2>Heading</h2>
                 <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                 <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
               </div>
           </div>
       </div>
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
                  {left: 1500, repeat: -1, yoyo: true, ease: Circ.easeInOut, delay: 0, repeatDelay: 2 }
                );

    // build scene
    var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 1900, offset: 100})
            .setTween(tween)
            .addIndicators({name: "loop"}) // add indicators (requires plugin)
            .addTo(controller);
</script>
</body>
<div class="loading"><div class="loading_child"></div></div>
</html>
