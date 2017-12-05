<?php

$page_state = $_REQUEST["state"];
$submit = $_REQUEST["submit"];

if($page_state == 0) { // Book Us State
  date_default_timezone_set("America/New_York");
  $name = $_REQUEST["user-name"];
  $email = $_REQUEST["user-email"];
  $date = $_REQUEST["event-date"];
  $timeBefore = $_REQUEST["time-range-before"];
  $timeAfter = $_REQUEST["time-range-after"];
  $note = $_REQUEST["user-notes"];

  $name_valid = true;
  $email_valid = true;
  $date_valid = true;
  $time_valid = true;
  $note_valid = true;
}

if($page_state == 1) { // Contact Us State
  $name = $_REQUEST["user-name"];
  $email = $_REQUEST["user-email"];
  $note = $_REQUEST["user-notes"];

  $name_valid = true;
  $email_valid = true;
  $note_valid = true;
}

if (isset($submit)) {

  if($page_state == 0 || $page_state == "") { // Book Us State
    // NAME VALIDATION
    $name_nonempty = !empty($name);
    $name_onlylets = preg_match("/^[a-zA-Z ]*$/",$name);
    $name_valid = $name_nonempty && $name_onlylets;

    // EMAIL VALIDATION
    $email_nonempty = !empty($email);
    $email_format = filter_var($email, FILTER_VALIDATE_EMAIL);
    $email_valid = $email_nonempty && $email_format;

    // DATE VALIDATOIN
    $date_nonempty = !empty($date);

    $current_date = date("Y-m-d");
    list($user_year, $user_month, $user_day) = split('-', $date);
    list($year, $month, $day) = split('-', $current_date);

    $date_acd = true;
    if ($user_year < $year) {
      $date_acd = false;
    }

    if ($user_year == $year) {
      if ($user_month < $month) {
        $date_acd = false;
      }
    }

    if ($user_year == $year) {
      if ($user_month == $month) {
        if ($user_day < $day) {
          $date_acd = false;
        }
      }
    }
    $date_valid = $date_nonempty && $date_acd;

    // TIME VALIDATION
    $timeBefore_nonempty = !empty($timeBefore);
    $timeAfter_nonempty = !empty($timeAfter);
    $time_valid = $timeBefore_nonempty && $timeAfter_nonempty;

    if ($name_valid && $email_valid && $date_valid && $time_valid) {
      session_start();
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['date'] = $date;
      $_SESSION['time-before'] = $timeBefore;
      $_SESSION['time-after'] = $timeAfter;
      $_SESSION['note'] = $note;
      $_SESSION['state'] = $page_state;
      header("Location: formpage.php");
      return;
    } else {
      if (!$name_valid) {
        $name_valid = false;
      }
      if (!$email_valid) {
        $email_valid = false;
      }
      if (!$date_valid) {
        $date_valid = false;
      }
      if (!$time_valid) {
        $time_valid = false;
      }
    }
  }

  if ($page_state == 1) { // Contact Us State

    // NAME VALIDATION
    $name_nonempty = !empty($name);
    $name_onlylets = preg_match("/^[a-zA-Z ]*$/",$name);
    $name_valid = $name_nonempty && $name_onlylets;

    // EMAIL VALIDATION
    $email_nonempty = !empty($email);
    $email_format = filter_var($email, FILTER_VALIDATE_EMAIL);
    $email_valid = $email_nonempty && $email_format;

    // MESSAGE VALIDATION
    $note_valid = !empty($note);

    if ($name_valid && $email_valid && $note_valid) {
      session_start();
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION['note'] = $note;
      $_SESSION['state'] = $page_state;
      header("Location: formpage.php");
      return;
    } else {
      echo '<style type="text/css">
            #date-div {
              display: none;
            }
            #date-error {
              display: none;
            }
            #time-div {
              display: none;
            }
            #time-error {
              display: none;
            }
            </style>';
      if (!$name_valid) {
        $name_valid = false;
        $page_state = 1;
      }
      if (!$email_valid) {
        $email_valid = false;
        $page_state = 1;
      }
      if (!$note_valid) {
        $note_valid = false;
        $page_state = 1;
      }
    }
  }

}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Booking</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="scripts/jquery-3.2.1.min.js"></script>
  <script src="scripts/form-scripts.js" type="text/javascript"></script>
</head>

<body>
  <img src="images/scale2.png" alt="Musical Scale" id="scale">
  <h1><a id="navTitle" href="index.php">Original Cornell Syncopators</a></h1>
  <?php include("includes/navigation.php"); ?>
  <img src="images/scale2-end.png" alt="Musical Scale End" id="scale-end">
  <h1>Booking</h1>

  <div id="all-content-box">

    <!-- CALENDAR -->
    <div id="calendar">
      <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=evergreenskier%40gmail.com&amp;color=%234E5D6C&amp;ctz=America%2FNew_York" style="border-width:0" width="600" height="400"></iframe>
    </div>

    <!-- FORM CODE -->
    <form id="form" action="booking.php" method="post" novalidate>

      <h2 id="form-header"><?php if ($page_state==0) { echo("Book Us!"); } else { echo("Contact Us!"); } ?></h2>
      <input type="text" id="state" name="state" value="<?php echo($page_state); ?>">

      <!-- NAME -->
      <div id="name-box">
        <label class="form-label">Name*:</label>
        <input type="text" id="name" placeholder="Louis Armstrong" name="user-name" value="<?php echo( htmlspecialchars($name) );?>" required pattern="[A-Za-z\s]{1,}$">
      </div>
      <div class="<?php if ($name_valid) { echo("error-hidden"); } ?>" id="name-error">
        Invalid or no name provided.
      </div>

      <!-- EMAIL -->
      <div>
        <label id="email-label">E-mail*:</label>
        <input type="email" id="email" placeholder="saxaphone123@jazz.edu" name="user-email" value="<?php echo( htmlspecialchars($email) );?>" required pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$">
      </div>
      <div class="<?php if ($email_valid) { echo("error-hidden"); } ?>" id="email-error">
        Invalid or no email provided.
      </div>

      <!-- DATE -->
      <div id="date-div">
        <label id="date-label">Date*:</label>
        <input type="date" id="event-date" name="event-date" value="<?php echo( htmlspecialchars($date) );?>" required>
      </div>
      <div class="<?php if ($date_valid) { echo("error-hidden"); } ?>" id="date-error">
        Invalid date provided.
      </div>

      <!-- TIME -->
      <div id="time-div">
        <label id="range-label">Time*:</label>
        <input type="time" id="time-range-before" name="time-range-before" value="<?php echo( htmlspecialchars($timeBefore) );?>" required>
        to
        <input type="time" id="time-range-after" name="time-range-after" value="<?php echo( htmlspecialchars($timeAfter) );?>" required>
      </div>
      <div class="<?php if ($time_valid) { echo("error-hidden"); } ?>" id="time-error">
        Invalid or missing time range provided.
      </div>

      <!-- EVENT DESCRIPTION -->
      <div id="event-desc">
        <label id="form-label-unique">Event Details:</label>
        <textarea id="notes" required name="user-notes" placeholder="Let us know more about the event!"><?php echo( htmlspecialchars($note) );?></textarea>
      </div>
      <div class="<?php if ($note_valid) { echo("error-hidden"); } ?>" id="msg-error">
        Please provide a message.
      </div>

      <div class="submit-button">
        <button id='submit' name="submit" type="submit">Submit</button>
      </div>

      <!-- REQUIRED MESSAGE -->
      <div id="required-field">
        Note that * indicates a required field
      </div>

    </form>

    <!-- SUBMIT BUTTON -->
    <div id="switch-button-div">
      <button id="switch-button"><?php if ($page_state==0) { echo("Contact Us!"); } else { echo("Book Us!"); } ?></button>
    </div>

  </div>

</body>
</html>
