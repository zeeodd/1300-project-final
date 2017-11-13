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
  <h1><a id="navTitle" href="index.php">Original Cornell Syncopators</a></h1>
  <?php include("includes/navigation.php"); ?>
  <h1>Booking</h1>

  <div id="all-content-box">

    <div id="calendar">
      <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=evergreenskier%40gmail.com&amp;color=%234E5D6C&amp;ctz=America%2FNew_York" style="border-width:0" width="600" height="400"></iframe>
    </div>

    <form id="form" action="/formpage.php" method="post">

      <h3 id="form-header">Book Us!</h3>

      <div id="name-box">
        <label class="form-label">Name:</label>
        <input class="form-active" type="text" id="name" name="user-name" required pattern="[A-Za-z\s]{1,}$">
      </div>

      <div>
        <label id="email-label">E-mail:</label>
        <input class="form-active" type="email" id="email" name="user-email" required pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$">
      </div>

      <div>
        <label id="date-label">Date:</label>
        <input class="form-active" type="date" id="event-date" name="event-date" required>
      </div>

      <div>
        <label id="range-label">Duration (hrs):</label>
        <input class="form-active" type="range" id="time-range-id" name="time-range" list="tickmarks" min="1" max="5" value="1" oninput="document.getElementById('output-id').innerHTML = this.value;">
        <datalist id="tickmarks">
          <option value="1">
          <option value="2">
          <option value="3">
          <option value="4">
          <option value="5">
        </datalist>
        <output name="output" id="output-id">1</output>
      </div>

      <div id="event-desc">
        <label id="form-label-unique">Event Details:</label>
        <textarea id="notes" name="user-notes" placeholder="Let us know more about the event!"></textarea>
      </div>

      <div class="submit-button">
        <button type="submit">Submit</button>
      </div>

    </form>

    <div id="switch-button-div">
      <button id="switch-button">Switch Forms</button>
    </div>

  </div>

</body>
</html>
