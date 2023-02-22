<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Come try the best authentic delicious tacos in Delaware County Pa!"
    />
    <meta name="author" content="Kristin Wilford" />
    <title>CCW</title>

    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- CUSTOM FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />

    <!-- BOOTSTRAP -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

   
    <style>

* {
  margin: 0;
  padding: 0;
}

body {
  background-color: black;
  font-family: Arial, "Tahoma", sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #a058e4;
  text-align: center;
  padding: 18px 16px;
  text-decoration: none;
  font-size: 22px;
  font-family: "Lobster", cursive, Tahoma;
}

.topnav a:hover {
  color: yellow;
}

.topnav a.active {
  color: #cd58d1;
}

.topnav .icon {
  display: none;
}

.topnav .fr {
  float: right;
}

.pic1 {
  height: 200px;
  width: 100%;
  border-radius: 10px;
  border: 5px solid yellow;
}

.pics2{
  height: 400px;
  border-radius: 6px;
  width: 100%;
}

.logo {
  width: 80%;
  height: 150px;
  margin: auto;
}

.feature {
  font-family: "Lobster", cursive, Tahoma;
  font-weight: bold;
  margin: 30px 0 0 0;
}

.picText {
  color: white;
  font-size: 25px;
  text-align: center;
}

.glow {
  font-size: 28px;
  color: #fff;
  text-align: center !important;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073,
      0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }

  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6,
      0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}


.btn1 {
        font-family: "Lobster", cursive, Tahoma;
        font-weight: bold;
        font-size: 25px;
        width: 100%;
        padding: 1.5% 2px;
        background-color: #7c3aba;
        color: rgb(46, 9, 71);
        margin: 15px 0;
        border-radius: 6px;
        border: none;                                                                                         
      }

      .btn1:hover {
        color: yellow;
        outline: none;
      }

       /* CALENDAR STYLES */

.calendarContainer{
  width: 100%;
  border-radius: 6px;
  box-shadow: 5px 5px 5px 3px #7c3aba;
}       

h2{
  text-align: center;
  border-bottom: 1px solid white;
  color: yellow;
  margin: 25px 0;
  padding: 10px 0;
}

.leftSide{
  padding: 40px 0;
  background-color: #ccc;
  width: 20%;
  float: left;
  font-size: 25px;
  font-weight: bold;
  text-align: center;

}

.calendarChild{
  padding: 15px 0 15px 15px;  
  margin-left: 20%; 
  font-size: 20px;
  font-weight: bold;
  color: #ccc;
}

.clock{
  height: 75px;
  width: 75px;
}

      /* MODAL STYLES */

      .modal-header{
        text-align: center;
        background-color: #ccc;
      }

      .modal-body{
        background-color: #1e1b2b;
      }

      input{font-size: 20px !important;}

      .form-control{
        border: none;
        text-align: center;                
      }

      .form-control:focus{
        background-color: #d3cfe6;
        
      }

      small{
        font-size: 14px;
        color: white;
        font-weight: bold;
        text-align: center;
        font-style: italic;
      }

      .modal-footer{
        background-color: #ccc;
        
      }

      .modal-footer button{
        font-weight: bold;
      }
.info{
  font-style: italic;
  font-weight: bold;
  color: #a368c4;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {
    position: relative;
  }
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }

  .logo {
    width: 100%;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.myFooter {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #1d1e26;
  color: white;
  text-align: center;
  padding: 10px 0;
  font-size: 12px;
  word-spacing: 2px;
  margin-top: 20px;
}



    
    </style>
  </head>
  <body>
    <div class="topnav" id="myTopnav">
      <a href="index.php" class="active">Home</a>
      <a href="events.php">Events</a>
      <a href="#contact">Contact Us</a>
      <a href="about.php">About Us</a>
      <a
        href="#survey"
        class="fr"
        data-toggle="modal"
        data-target="#survey"
        >Take Our Survey!&nbsp;&nbsp;</a
      >
      <a href="#order" class="fr">Order Online</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    
    </div>

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
