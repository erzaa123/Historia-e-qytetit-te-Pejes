<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>About Us</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


</style>
</head>
<body>
<header>
        <div class="main">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="AboutUs.php">About Us</a></li> 
                <li><a href="ContactUs.php">Contact Us</a></li>  
                <li><a href="News.php">News</a></li>
                <button class="btn"><a href="register_form.php">LOGIN</a></button>
            </ul>
        </div>
    </header>  
    <br><br><br><br><br><br>
     <?php
 
          require 'aboutusconfig.php';
          $query = "SELECT * FROM aboutus";
          $query_run = mysqli_query($connection,$query);

          if(mysqli_num_rows($query_run) > 0)
          {
          foreach($query_run as $row)
          {
            ?>
          
    <div class="about-section">
  <h1><?php echo $row['title']; ?></h1>
  <p><?php echo $row['name']; ?></p>
  <p><?php echo $row['description']; ?></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
    
       
      <img src="Erëza.jpg" alt="Erëza" style="width: 50%;">
      <div class="container">
        <h2>Erëza Haxhiajdini</h2>
        <p class="title">Student</p>
        <p>I study computer science.</p>
        <p>erza.haxhiajdini@gmail.com</p>
        <p><button class="button"><a href="ContactUs.php">Contact</a></button></p>
        <?php
          }
        }
        else{
            echo "No Record Found";
        }
        ?>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Gresa.jpg" alt="Gresa" style="width:45%">
      <div class="container">
        <h2>Gresa Shala</h2>
        <p class="title">Student</p>
        <p>I study computer science.</p>
        <p>ggresashala15@gmail.com</p>
        <p><button class="button"><a href="ContactUs.php">Contact</a></button></p>
      </div>
    </div>
  </div>

 
</div>
</body>
</html>