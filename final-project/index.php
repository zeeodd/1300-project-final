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

  <p id= "band-desc">
    We are the Cornell Original Syncopators, an ensemble based at Cornell University specializing in Hot and Classic Jazz from the 1910s-1930s.
  </p>

  <div id="slide">

    <div id="image_container">
      <img id="current_img" src="images/cover-photo1.jpg" alt='Current Image'>
    </div>

    <div id="button_container">
      <button class="slide_button" id="left">&#10094;</button>
      <button class="slide_button" id="right">&#10095;</button>
    </div>

  </div>

  <section class="home-box" id= "thanks">
    <p>Thanks for visiting our site. Listen to our newest release, read our bios, or book us for your upcoming event!</p>
    <p>Also, feel free to check us out social media!</p>
  </section>

  <section class="home-box" id="news">
    <h2>News</h2>
    <h3><a href="http://news.cornell.edu/stories/2017/02/students-re-create-music-vibe-jazzs-earliest-days">Students re-create music, vibe from jazz's earliest days</a></h3>
    <h3><a href="http://www.ithaca.com/entertainment/music/jazz-at-the-century-mark-taking-a-trip-back-to/article_29d7a666-f92e-11e6-8413-cf88fd37ff7e.html">Jazz at the century mark: Taking a trip back to the beginning</a></h3>
    <h3><a href="https://aap.cornell.edu/news-events/original-cornell-syncopators-100-years-recorded-jazz">The Original Cornell Syncopators: 100 Years of Recorded Jazz</a></h3>
  </section>

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
