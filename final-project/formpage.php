<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$date = $_SESSION['date'];
$timeBefore = $_SESSION['time-before'];
$timeAfter = $_SESSION['time-after'];
$note = $_SESSION['note'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Submission</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h2>
    Form page still under construction!
  </h2>

  <div>
    <?php echo( htmlspecialchars($name) ); ?> <br/>
    <?php echo( htmlspecialchars($email) ); ?> <br/>
    <?php echo( htmlspecialchars($date) ); ?> <br/>
    <?php echo( htmlspecialchars($timeBefore) ); ?> <br/>
    <?php echo( htmlspecialchars($timeAfter) ); ?> <br/>
    <?php echo( htmlspecialchars($note) ); ?> <br/>
  </div>

  <div>
    <a href="index.php">Return Home</a>
  </div>
</body>

</html>
