<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.plugin.js"></script> 
        <script type="text/javascript" src="js/jquery.countdown.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    </head>
</head>
<script>
    $(document).ready(function () {
    var command;
    getRoomStatus();
    clearReminderInput();
    $("#wrapper1").hide();
    $("#wrapper2").hide();
    
    $("#btnCountdownStart").click(function () {

    $.get("ValueCheck.php", {hours: $("#hoursinput").val(), minutes: $("#minutesinput").val(), seconds: $("#secondsinput").val()}, function (data) {

    if (data == "Good")
    {
    $("#timertime").countdown("destroy");
    $("#timertime").countdown({onExpiry: CountdownDone, until: '+' + $("#hoursinput").val() + 'h ' + $("#minutesinput").val() + 'm ' + $("#secondsinput").val() + 's' , format: 'HMS'});
    } else {
    $("#timertime").text(data);
    }
    });
    });
    $("#btnCountdownPause").click(function () {
    $("#timertime").countdown("toggle");
    });
    $("#btnCountdownStop").click(function () {
    $("#timertime").countdown("destroy");
    });
    
    $("#searchButton").click(function () {
    getRoomStatus();
    });
    
    $("#reminder").click(function () {
    $("#wrapper1").slideToggle();
    });
    $("#timer").click(function () {
    $("#wrapper2").slideToggle();
    });
    
    $("#setReminder").click(function () {
        var input = this;
        input.disabled = true;
    SetReminder();
      input.disabled= false;
    });
    $("#CancelReminder").click(function (){
        cancelReminder();
    });
    });
    
    function CountdownDone(){
        alert("Countdown  finished !!");
    }
    function SetReminder() {
    if ($.isNumeric($("#temperatureInput").val())) {
    $("#temperatureactive").text($("#temperatureInput").val() + " °C");
    }
    $.get(".\\tmp\\SetReminderScript.php", {value: $("#temperatureInput").val()}, function (data) {
    $("#statustext").text(data);
    $("#temperatureactive").text("°C");
    });
    }    
    function clearReminderInput() {
    $("#hoursinput").val(0);
    $("#minutesinput").val(0);
    $("#secondsinput").val(0);
    }
    function getRoomStatus() {
    $.get(".\\tmp\\GetRoomStatusScript.php", function (data) {
    var arr = data.split(',');
    $("#roomtemperature").text(arr[0] + " °C");
    setTimeout(getRoomStatus, 3000);
    });
    }
    function cancelReminder(){
        $.get(".\\tmp\\StopReminderScript.php",function (data){
            alert(data);
        });
    }
</script>
<body>
    <div id="header2">

        <img id="imgheader" src="./assets/KitchenPortal-bez bg.png"/>


    </div>
    <div id="body2">
        <div id="nav">

            <div id="reminder">
                <p>REMINDER</p>
            </div>
            
            <div id="timer">
                <p>TIMER</p>
            </div>
            <div id="status">              
                    <p id="roomstatustext">Room status</p>
                    <p id="roomstatusdata">
                    <span id="roomtemperature"> °C</span>                 
                    <img src="assets/sun94.png" id="image">
                </p>
                
            </div>
        </div>
        <div id="wrapper1">
            <div id="reminderhelper"> 
                <div id="setterbox">
                    <h2>Desired temperature</h2>
                    <input id="temperatureInput"/>
                    <button id="setReminder">Set reminder</button>
                    <h3 id="statustext">&nbsp</h3>
                </div>
                <div id="setterboxhider"></div>
                <div id="reminderinfo">
                    <h1>Active reminder</h1>
                    <h2 id="temperatureactive">°C</h2>
                    <button id="CancelReminder">CANCEL</button>
                </div>
            </div>
        </div>
        <div id="wrapper2">
            <div id="timeinput">
                <div class="inputs">
                    <input id="hoursinput"/>
                    <label>Hours</label>
                </div>
                <div class="inputs">
                    <input id="minutesinput"/>              
                    <label>Minutes</label>
                </div>
                <div class="inputs">
                    <input id="secondsinput"/>
                    <label>Seconds</label>
                </div>
            </div>
            <div id="timebtns">
                <button id="btnCountdownStart">start</button>
                <button id="btnCountdownPause">pause</button>
                <button id="btnCountdownStop">stop</button>
            </div>
            <h1 id="timertime">00:00:00</h1>
        </div>
    </div>
</body>    
</html>
