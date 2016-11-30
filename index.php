<html>
<head>
    <script type="text/javascript" src="lib/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Crimson+Text" />
    <style type="text/css" src"css/reset.css"></style>
    <style type="text/css">
        .box {
            width: 100px;
            height: 100px;
            background-color: black;
        }
        .innerbox {
            height: 100%;
            
        }
        .day {            
            padding-top: 4px;       
            background-color: transparent;
            text-align: center;
            font-family: 'Crimson Text';
            font-size: 40pt;
            color: white;
        }
        .month {            
            margin-top: -5px;
            background-color: transparent;            
            font-family: 'Crimson Text';
            text-align: center;
            font-size: 14pt;
            color: white;
            
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="innerbox">
            <div class="day" id="dayContainer"></div>    
            <div class="month" id="monthContainer"></div>
        </div>
    </div>
    
    <script type="text/javascript">
        var monthNames = ["Jan", "Feb", "Mar",
        "Apr", "May", "Jun", "Jul",
        "Aug", "Sep", "Oct",
        "Nov", "Dec"];

        var date = new Date();
        var day = String(date.getDate());
//        if (day.length == 1) {
//        day = "0" + day;
//        }
        var monthIndex = date.getMonth();        

        $('#dayContainer').html(day);
        $('#monthContainer').html(monthNames[monthIndex].toUpperCase() + '.');
    </script>
</body>
</html>