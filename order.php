
<!DOCTYPE html>
<html >
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/index.js"></script>
</head>
<body class="colorBG">


<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">smartCopy</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
        <li ><a class="temp2" href="#" >History</a></li>
    </ul>


            <ul class="nav navbar-nav navbar-right">


                <?php
                session_start();

  echo ' <li class="temp1"> Welcome '.$_SESSION['user_fname'].'</li>
     <li><form method="POST" action="logout.php"><button type="submit" name="logout" class="temp">Logout</button></form></li>
            ';
              ?>

            </ul>
        </div>
    </div>
</div>



<div class="container colorBG" style="padding-top: 40px">
<div class="col-md-12 AddedPadding" >
<div class="well well-lg" style="background-color: rgb(255,255,255)">

<h2>Order details</h2>

    <div class="col-md-2" >
    </div>
  
    <div class="col-md-8 AddedPadding" >
      <div class="well well-lg" style="background-color: rgb(255,255,255)">

      <h4 style="margin-left:10px">No. of Copies</h4>
<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength = 3 style="margin:10px; width:60px" value =1>
</input>
  </div>
  </div>  







<div id="body">
 <form action="filePage.php" method="post" enctype="multipart/form-data">





<button class="button button-block" type="submit" name="btn-upload" onclick="cutBalance()" style="margin:10px">UPLOAD</button>


 </form>
    <br /><br />
  
</div>
</div>
</div>


</body>
</html>