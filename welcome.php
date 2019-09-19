<?php
	session_start();
    if($_SESSION['username'] == '') {
        header("location: index.html");
    }
?>
<!DOCTYPE html><html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text&display=swap" rel="stylesheet">
        <title>
            Login Page
        </title>
    </head>
    <body>
        <header>
            <nav class="header-con">
                <a href="#Home" class="header-logo">
                The Internship
                </a>
                
                <a href="#Login" class="header-link">
                    Login
                </a>
              
                </a>
                <a href="#Register" class="header-link">
                    Register
                </a>
               
                
            </nav>
        </header>
        <section>
       <p class="main-header"> Welcome To The Internship, Oladetoun Temitayo Micheal, <br>
        We will be launching soon and hope to have you as an Intern.
        </p>
        <a href="logout.php">
            <button class="register-btn" type="button">Log out</button>
        </a>

        
    </section>

  


    <script src="js/script.js"></script>
    </body>
    
</html>