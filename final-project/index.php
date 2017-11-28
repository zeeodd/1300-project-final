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

  <div id="slide">

    <div id="image_container">
      <img id="current_img" src="images/cover-photo1.jpg">
    </div>

    <div id="button_container">
      <button class="slide_button" id="left">&#10094;</button>
      <button class="slide_button" id="right">&#10095;</button>
    </div>

  </div>

  <br/>

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
