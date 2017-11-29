<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <h1><a id="navTitle" href="index.php">Original Cornell Syncopators</a></h1>
  <?php include("includes/navigation.php"); ?>
  <h1>Our Releases</h1>

  <div id="releases">
    <div id="album_play">
      <iframe id="spotify" src="https://open.spotify.com/embed/album/1vHJ7SnXsBAkbIwj7crJUg" width="300"
      height="380" frameborder="0" allowtransparency="true"></iframe>
    </div>

    <div id="album">
      <img src="images/album_cover.jpg" alt="album_cover" id="albumcover">
    </div>

    <div id="album_des">
      <p> Check out our album "Wild Jazz", which was released on November 26th, 2017.
        "Wild Jazz" is out on Spotify, Bandcamp and will soon be on Itunes as well.
        Thanks to Electric Buffalo Records for the fantastic production! </p>
    </div>
  </div>

  <h1>Our Videos</h1>
  <p> from oldest to new </p>
  <div id="our_vids">

    <div>
      <iframe width="550" height="315" class="iframe" src="https://www.youtube.com/embed/3BdBbSmKftY"
      allowfullscreen></iframe>
      <p> Upload date: December 6th, 2016 </p>
    </div>

    <div>
      <iframe width="550" height="315" class="iframe" src="https://www.youtube.com/embed/aPPEhsDzKWI"
      allowfullscreen></iframe>
      <p> Upload date: March 3rd, 2017 </p>
    </div>

    <div>
      <iframe width="550" height="315" class="iframe" src="https://www.youtube.com/embed/3XxF_sYYORM"
      allowfullscreen></iframe>
      <p> Upload date: March 3rd, 2017 </p>
    </div>

    <div>
      <iframe width="550" height="315" class="iframe" src="https://www.youtube.com/embed/luleNxfOB3c"
      allowfullscreen></iframe>
      <p> Upload date: March 3rd, 2017 </p>
    </div>
  </div>
</body>

</html>
