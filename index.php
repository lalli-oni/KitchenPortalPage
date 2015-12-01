<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div id=mother>
    <div id=topBar>
      <h1 id=title>Welcome to this site</h1>
    </div>
    <div id=>
    <button id=toggleButton onclick="toggleVisibility()">Toggle Navbar</button>
    </div>
    <div id=content>
      <div id=togglingBar>
          <div id=toggleReminder float=left>
              <script>
                function toggleReminderVisibility() {
                  document.getElementById("title").innerHTML = "Reminder";
                  var bar = document.getElementById("reminderWindow");
                  if (bar.style.display != 'none') {
                    bar.style.display = 'none';
                  } else {
                    bar.style.display = 'block';
                  }
                }
                </script>
                <button id=toggleReminderButton onclick="toggleReminderVisibility()">Reminder</button>
          </div>
          <div id=toggleTimer float=right>
              <script>
                function toggleAlarmVisibility() {
                  document.getElementById("title").innerHTML = "Alarm";
                  var bar = document.getElementById("alarmWindow");
                  if (bar.style.display != 'none') {
                    bar.style.display = 'none';
                  } else {
                    bar.style.display = 'block';
                  }
                }
                </script>
                <button id=toggleAlarmButton onclick="toggleAlarmVisibility()">Alarm</button>
          </div>
      </div>
      <div id=alertWindow>
        <div id=reminderWindow>

        </div>
          <div id=alarmWindow>

          </div>
      </div>
    </div>
  </div>
  </body>
  </html>
