<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/slideshow.css" media="all"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
</head>

<body>
  <h1><a id="navTitle" href="index.php">Original Cornell Syncopators</a></h1>
  <?php include("includes/navigation.php"); ?>
  <h1>Home</h1>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <!-- Source: https://developers.facebook.com/docs/plugins/like-button -->

  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img class="home-pics" src="images/cover-photo1.jpg" alt="Picture 1">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="images/cover-photo2.jpg" alt="Picture 2">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="images/cover-photo3.jpg" alt="Picture 3">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="images/cover-photo4.jpg" alt="Picture 4">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>
<!-- Source: https://www.w3schools.com/howto/howto_js_slideshow.asp -->

  <p id= "band-desc">
    We are the Cornell Original Syncopators, an ensemble based at Cornell University specializing in Hot and Classic Jazz from the 1910s-1930s.
  </p>

  <footer>
    <div class="fb-like" data-href="https://www.facebook.com/OriginalSyncopators/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    <!-- Source: https://developers.facebook.com/docs/plugins/like-button -->
  </footer>

  <script src="scripts/slideshow.js" type="text/javascript"></script>
</body>
</html>
