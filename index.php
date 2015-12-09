<html>
<<<<<<< HEAD
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
                  //document.getElementById("title").innerHTML = "Reminder";
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
                  //document.getElementById("title").innerHTML = "Alarm";
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
        <div id=recipeInpupWrapper>
          <form>
            Recipe name:<br>
            <input type="text" name="recipeName"><br>
          </form>
          <script>
            function searchRecipe() {
              document.getElementById("title").innerHTML = "recipeResults";
              var recipeResultWindow = document.getElementById("recipeResultWindow");
              if (recipeResultWindow.style.display != "none") {
                  recipeResultWindow.style.display = "block";
              }
            }
            </script>
        <button id=searchButton onclick="searchRecipe()">Search<br>
         <div id=recipeResultWindow>
          <p>lol alarm</p>
            <p>recip2</p>
        </div>       
    </div>
  </div>
  </body>
  </html>
=======
    <head>
        <meta charset="UTF-8">
        <link href="CssStyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.plugin.js"></script> 
        <script type="text/javascript" src="js/jquery.countdown.js"></script>
<script>
$(document).ready(function(){
   $(window).unload(function(){
    req.abort();
});

     var req;
 
    function cancelReminder(){
          // req.abort();
            $.post("CancelReminderScript.php",function (data){
                alert(data);
            });
        }; 
        
        
        $(".btn1").click(function(){ 
           $.get("SetReminderScript.php?value=" + $("#input1").val(),function (data){
                    $(".ht").text(data);
                    
                });
   });       
   
   $(".btn2").click(function (){
      cancelReminder();
  });
  
  $(".btnCountdown").click(function (){        

    valuesCheck();
    //$(".countdowndiv").countdown({until: '+'+ $(".hoursinput").val() +'h'});
            
  });
//  function  valuesCheck(){
//      $.get("ValueCheck", data: '{"hours": }');
//      
//  };
//  
  });
  
</script>
        <title>Kitchen Portal</title>
    </head>
    <body>
        <div class="main">
            <div class="header">
                <h1>Set reminder</h1>
            </div>
            <div class="body1">
             <input class="input1" id="input1"/>                  
             <button class="btn1">Set Reminder</button> 
             <p id="errortxt"></p>
            </div>   
            <div class="body2">
                <h3 class="ht"></h3>
            </div>
                               <button class="btn2">Cancel reminder</button> 

        </div>
</div>
<div>
    <p>Hours</p>
    <input class="hoursinput"/>
    <p> Minutes</p>
    <input id="minutesinput"/>
    <p>Seconds</p>
    <input id="secondsinout"/>
    <button class="btnCountdown">Set countdown timer</button>
    <div class="countdowndiv"></div>
</div>
    </body>
</html>
>>>>>>> 1bad177c66140a16d56f7c795549cecc59c78a7e
