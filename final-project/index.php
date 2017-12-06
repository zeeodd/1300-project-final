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

  <div id="slide">

    <div id="image_container">
      <img id="current_img" src="images/cover-photo1.jpg" alt='Current Image'>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <a href="https://www.facebook.com/OriginalSyncopators/" class="fa fa-facebook"></a>
    <a href="https://open.spotify.com/album/1vHJ7SnXsBAkbIwj7crJUg" class="fa fa-spotify"></a>
    <a href="https://theoriginalcornellsyncopators.bandcamp.com/" class="fa fa-bandcamp"></a>
    <!-- https://www.w3schools.com/howto/howto_css_social_media_buttons.asp -->
  </footer>

  <script src="scripts/slideshow.js" type="text/javascript"></script>
</body>
</html>
