<?php session_start()?>


<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .container-fluid {
            box-shadow: 1px 5px 15px;
            border-style: none;
            position: fixed;
            width: 100%;

        }

        .navbar-inverse .navbar-brand {
            color: white;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #fff;
        }

        .sideBar {
            width: 13%;
            height: 100%;
            margin-left: 0px;
            margin-top: -30px;
            border-radius: 1.5%;
            background-color: green;
            box-shadow: 5px 10px 8px #888888;
            font-family: 'Oswald', sans-serif;
            position: fixed;
        }

        .Name {
            font-family: 'Montserrat', sans-serif;
            font-size: 40px;
            color: white;
            margin-left: 14px;
        }

        .line1 {
            color: black;
        }

        .description {
            margin-top: 10px;
            font-family: 'Josefin Sans', sans-serif;
            margin-left: 5px;
            margin-right: 40px;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: #005c00;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown .dropbtn {
            padding-top: 14px;
            padding-right: 16px;
            padding-bottom: 14px;
            padding-left: 19px;
        }
        
        .create-header{
            margin-left: 45%;
            margin-top: 17%;
            font-family: 'Oswald', sans-serif;
            font-size: 50px;
            

        }

    </style>
</head>

<body>
    <?php

        $search_value = "alimaged98@gmail.com" ;

        $serverName = 'localhost' ;
        $userName = 'root' ; 
        $password = '' ;
        $dbName = 'classroom' ; 

        $connection = new mysqli($serverName , $userName , $password , $dbName) ;

        if ($connection->connect_error)
        {
            echo 'Connection Faild: '.$connection->connect_error;
        }
        else
        {
             $sql="SELECT * FROM teacher WHERE Email LIKE '$search_value'";
             $res=$connection->query($sql);
             /*while ($row= $res->fetch_assoc())
             {
                 echo $row["StudentName"];
             }*/
        }
    ?>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="background-color: green">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: 'Gamja Flower', cursive; font-size: 40px;">Classroom</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a><span class="glyphicon glyphicon-user"></span>
                        <li><a href="Teacher-SignupHTML.php" ><span class="glyphicon glyphicon-user"></span> Logout</a></li>
                        <?php
                        echo $_SESSION['teacherName'] ;
                        ?>
                        </a></li>
                </ul>

                <div class="dropdown">
                    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
        </nav>

        <div class="sideBar" onclick="showContext()">
            <div class="Name"><b>
                <?php
                echo $_SESSION['teacherName'] ;
                ?>
            </b></div>
            <hr class="line1">
            <div class="description">Add your to-do list, and let us do the rest!. we will tell you how well you are doing on each task The dads in this archival photos carried children on their shoulders, brought them along on trips to market, and shared moments of joy—much like fathers do today.
            </div>
        </div>
            
            <h1 class="create-header"> Create A Classroom!</h1>

</body>

</html>
