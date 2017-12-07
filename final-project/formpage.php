<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$date = $_SESSION['date'];
$timeBefore = $_SESSION['time-before'];
$timeAfter = $_SESSION['time-after'];
$note = $_SESSION['note'];
$page_state = $_SESSION['state'];

if ($page_state == 1) {
  $date = 'N/A';
  $timeBefore = 'N/A';
  $timeAfter = 'N/A';
}

// PHP MAIL FUNCTION
// $receiver = $email;
// $subject = "The Original Cornell Syncopators!";
// $message = $note . ' ' . $name;
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// $headers .= 'Reply-To: ' . $name . "\r\n";
// $headers .= 'Return-Path: ' . $email . "\r\n";
// $headers .= 'From: "The Syncopators" <ogcornellsyncopators@cornell.edu>' . "\r\n";
//
// if (mail($receiver, $subject, $message, $headers)) {
//   echo 'success';
// } else {
//   echo 'failure';
// };

// PHP NOTEPAD WRITER
$file = fopen("syncopators.txt", "w");
if ($page_state == 1) {
  $page_state_txt = '--- New Contact Request ---';
  $msg_txt = 'Message: ';
} else {
  $page_state_txt = '--- New Booking Request ---';
  $msg_txt = 'Event Details: ';
}
// HEADER
$txt = $page_state_txt;
fwrite($file, $page_state_txt);

// NAME
$txt = "\n".'Name: '.$name;
fwrite($file, $txt);

// EMAIL
$txt = "\n".'Email: '.$email;
fwrite($file, $txt);

// DATE
$txt = "\n".'Date: '.$date;
fwrite($file, $txt);

// TIME
$txt = "\n".'Time: '.$timeBefore.' to '.$timeAfter;
fwrite($file, $txt);

// MESSAGE
$txt = "\n".$msg_txt.$note;
fwrite($file, $txt);

fclose($file);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Submission</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/form.css" media="all"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <img src="images/scale2.png" alt="Musical Scale" id="scale">
  <h1><a id="navTitle" href="index.php">Original Cornell Syncopators</a></h1>
  <?php include("includes/navigation.php"); ?>
  <img src="images/scale2-end.png" alt="Musical Scale End" id="scale-end">

  <p class="formpage-p">
    Thank you for submitting the following information:
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

  <p class="formpage-p">
    We will respond to you promptly. In the meantime, feel free
    to explore the rest of our website and listen to our music!
  </p>
</body>

</html>
