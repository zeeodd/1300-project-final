<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$date = $_SESSION['date'];
$timeBefore = $_SESSION['time-before'];
$timeAfter = $_SESSION['time-after'];
$note = $_SESSION['note'];
$state = $_SESSION['state'];

if ($state == 1) {
  $date = 'N/A';
  $timeBefore = 'N/A';
  $timeAfter = 'N/A';
}
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
  <h1><a id="navTitle" href="index.php">Original Cornell Syncopators</a></h1>
  <?php include("includes/navigation.php"); ?>

  <p id="formpage-header">
    Thank you for submitting the following information! We will respond to you
    as quickly as possible. In the meantime, feel free to explore the rest of our
    website and listen to our music!
  </p>

  <div id=#form-container>
    <table id="form-table">
      <tr>
        <th class="th">Name</th>
        <th class="th">Email</th>
        <th class="th">Date</th>
        <th class="th">Start Time</th>
        <th class="th">End Time</th>
        <th class="th">Message</th>
      </tr>
      <tr>
        <td class="td"> <?php echo( htmlspecialchars($name) ); ?> </td>
        <td class="td"> <?php echo( htmlspecialchars($email) ); ?> </td>
        <td class="td"> <?php echo( htmlspecialchars($date) ); ?> </td>
        <td class="td"> <?php echo( htmlspecialchars($timeBefore) ); ?> </td>
        <td class="td"> <?php echo( htmlspecialchars($timeAfter) ); ?> </td>
        <td class="td"> <?php echo( htmlspecialchars($note) );?> </td>
      </tr>
    </table>
  </div>
</body>

</html>
