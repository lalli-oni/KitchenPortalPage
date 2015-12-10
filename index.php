<html>
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
          $(".ht").text("Reminder is running...");
           $.get("SetReminderScript.php?value=" + $("#input1").val(),function (data){
                    $(".ht").text(data);
                });
   });

   $(".btn2").click(function (){
      cancelReminder();
  });

  $(".btnCountdown").click(function (){

    valuesCheck();
  });
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
