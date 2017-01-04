<html>
<head>
    <script type="text/javascript" src="lib/jquery-3.1.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">    
    <style type="text/css" src"css/reset.css"></style>
    <style type="text/css">
        .box {
            width: 80px;
            height: 80px;
            background-color: black;
        }
        .innerbox {
            height: 100%;
            width: 100%;
        }
        .day {            
            width: 100%;
            padding-top: 8px;       
            background-color: 'red';
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 28pt;
            color: white;
            
        }
        .month {            
            width: 100%;            
            margin-top: -3px;
            background-color: transparent;            
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            font-size: 10pt;
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
        var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

        var date = new Date();
        var day = String(date.getDate());
        var monthIndex = date.getMonth();

        $('#dayContainer').html(day);
        $('#monthContainer').html(monthNames[monthIndex].toUpperCase() + '.');
    </script>
</body>
</html>