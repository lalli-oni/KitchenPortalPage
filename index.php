<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div id=mother>
    <div id=topBar>
      <div id=hud>
        <p id=temp>21°C</p>
        <img id=lightPic src="./assets/sunPlaceholder.PNG"/>
      </div>
        <div >
            <img id=header  src="./assets/KitchenPortal.jpg"/>
        </div>
    </div>

    <div id=content>
      <div id=togglingBar>
          <div id=toggleReminderWrapper>
              <script>
                function toggleReminderVisibility() {
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
          <div id=toggleAlarmWrapper>
              <script>
                function toggleAlarmVisibility() {
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
                <button id=toggleAlarmButton onclick="toggleAlarmVisibility()">Timer</button>
          </div>
      </div>
      <div id=alertWindow>
        <div id=reminderWindow>
            <input type="text">
            <button id=setalarmbutton  onclick="SetReminder()">Set Reminder</button>

        </div>
          <div id=alarmWindow>
            <p>TimerWindow</p>
          </div>
      </div>
      <div id=recipeWindow>
        <div id=recipeInputWrapper>
          <form>
            Recipe name:<br>
            <input type="text" name="recipeName"><br>
          </form>
          <script>
            function searchRecipe() {
              var recipeResultWindow = document.getElementById("recipeResultWindow");
              if (recipeResultWindow.style.display != "none") {
                  recipeResultWindow.style.display = "block";

                  var new_fakeRecipeBox = document.createElement('div');
                  console.log(new_fakeRecipeBox);
                  new_fakeRecipeBox.className = "fakeRecipeWrapper";
                  console.log(new_fakeRecipeBox);
                  var fakeRecipeText = document.createTextNode("This is a recipe");
                  console.log(new_fakeRecipeBox);
                  fakeRecipeText.className = "fakeRecipe";
                  console.log(new_fakeRecipeBox);
                  new_fakeRecipeBox.appendChild(fakeRecipeText);
                  console.log(new_fakeRecipeBox);
                  console.log(recipeResultWindow);
                  recipeResultWindow.appendChild(new_fakeRecipeBox);
              }
            }
            </script>
        <button id=searchButton onclick="searchRecipe()">Search<br>

    </div>
    <div id=recipeResultWindow>
   </div>
  </div>
  </body>
  </html>
