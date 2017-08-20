<!doctype>
<html lang="en-Us">
<meta charset="UTF-8">
<meta http-equiv="x-UA-Compatible"content="IE-edge">
<meta name="viewport"content="width-device-width,intial-scale=1">
    <head>
    <title>Welcome</title>
        <link rel="shortcut icon" href="images.jpg" />
    <link  rel="stylesheet" href="css/bootstrap.css"/>
    <link  rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <center><h1 style="font-family: Castellar"><b><i>User Login Successful</i></b></h1></center>
    <hr>
<style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    .row.content {height: 450px}
    
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  
        .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  border-radius:50%;
  margin: 5px 2px;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
    </style>
      </head>
    <body>           
            <!--panel Buttons alignment-->
        
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
        <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="#"><button type="button" class= "btn btn-success">Home</button></a></li>
          <li><a href="#"><button type="button" class= "btn btn-default">About</button></a></li>
        <li><a href="#"><button type="button" class= "btn btn-info">something</button></a></li>
        <li><a href="#"><button type="button" class= "btn btn-inverse">About</button></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
              
        <li><a href="index.html?logout='1'">
            <button type="button" class="btn btn-warning btn-sm" title="Signout"><span class="glyphicon glyphicon-log-out btn btn-danger" ></span>LOGOUT</button></a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    
      <div class="col-sm-2 sidenav">
        
        <a href="https://www.facebook.com" class="fa fa-facebook" title="Facebook"></a><br>
        <a href="https://twitter.com" class="fa fa-twitter" title="Twitter"></a><br>
        <a href="https://accounts.google.com/ServiceLogin?sacu=1&hl=EN#identifier" class="fa fa-google" title="Gmail"></a><br>
        <a href="https://www.linkedin.com/uas/login" class="fa fa-linkedin" title="LinkedIn"></a><br>
      
      </div>
    <div class="col-sm-8 text-left"> 
      <h1 style="font-family: Castellar">Welcome</h1>
      <p> Hello User !
        I hope you Would Like My Page.<br>
          Actually I thought a webpage is only all about <b>"HTML"</b>.But only after making an attempt to do this, i came to know about many things like <b><i> "CSS" , "BOOTSTRAP" , "Angular-JS" , etc.</i></b> It was fun learing these new topics.
          <br>Thank you giving me a chance as soonn as i asked. 
        
      </p>
        
      <hr>
        
        <marquee><b>If you really like this page , press the smiley given below.</b></marquee> 
        <div ng-app="myapp" ng-controller="ctrl">
            <button type="button"  class="btn btn-success" ng-click="like=like+1;worth=true"><i style="font-size: 3em" class="fa fa-smile-o" aria-hidden="true"></i></button>
     
        
  <div ng-show="worth">
        <h3><i class="fa fa-thumbs-up" aria-hidden="true"></i>{{"     "+like}}</h3> 
        <h3>Your likes worth</h3>
      <p>Thanks for the likes....!</p>
        </div>
        </div>

    </div>
      
    <div class="col-sm-2 sidenav">
          <img src="a1.jpg">
      <div class="well">
          <p><b><i>When you are good at something, Don't do it for free...!</i></b></p>
      </div>
    </div>
    </div>
        </div>


 <script>
    
        angular.module("myapp",[]).controller("ctrl",function($scope){
            $scope.like=0;
            $scope.worth=false;
        });
    </script>

    </body>
    </html>