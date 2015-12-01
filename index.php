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
                  var alarmWindow = document.getElementById("alarmWindow");
                  var reminderWindow = document.getElementById("reminderWindow");
                  if (alarmWindow.style.display != "none") {
                    alarmWindow.style.display = "none";
                      reminderWindow.style.display = "block";
                  } else if (reminderWindow.style.display != "none") {
                    reminderWindow.style.display = "none";
                      alarmWindow.style.display = "none";
                  } else {
                    reminderWindow.style.display = "block";
                  }
                }
                </script>
                <button id=toggleReminderButton onclick="toggleReminderVisibility()">Reminder</button>
          </div>
          <div id=toggleTimer float=right>
              <script>
                function toggleAlarmVisibility() {
                  document.getElementById("title").innerHTML = "Alarm";
                  var alarmWindow = document.getElementById("alarmWindow");
                  var reminderWindow = document.getElementById("reminderWindow");
                  if (reminderWindow.style.display != "none") {
                    reminderWindow.style.display = "none";
                      alarmWindow.style.display = "block";
                  } else if (alarmWindow.style.display != "none") {
                    alarmWindow.style.display = "none";
                      reminderWindow.style.display = "none";
                  } else {
                    alarmWindow.style.display = "block";
                  }
                }
                </script>
                <button id=toggleAlarmButton onclick="toggleAlarmVisibility()">Alarm</button>
          </div>
      </div>
      <div id=alertWindow>
        <div id=reminderWindow>
          <p>reminderWindow</p>
        </div>
          <div id=alarmWindow>
            <p>alarmWindow</p>
          </div>
      </div>
      <div id=recipeWindow>
        <form>bob</form>
        <p>recipe text</p>
      </div>
    </div>
  </div>
  </body>
  </html>
