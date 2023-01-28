<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Contact us form</title>
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
    <br><br><br><br><br><br><br><br>
    <div class="container">
        <h3>Contact us or Submit feedback</h3>
        <form method="POST" action="process.php">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
        
    </div>
        </form>
    </div>
</body>
</html>