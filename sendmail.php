<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Kate Bathurst Portfolio Page">
    <meta name="keywords" content="Kate Bathurst Web Development Portfolio">
	<title>Kate Bathurst Web Development Portfolio</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Raleway&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="title"><a href="index.html">Kate Bathurst</a></h1>
        <nav>
            <div class="nav-container">
                <ul class="main-nav">
                    <li><a href="#">Work Samples</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- <section id="about">
        <div class="text-wrapper">
        <h2>About Me</h2>
        <p>Blandit libero volutpat sed cras ornare arcu. Aliquam vestibulum morbi blandit cursus risus at ultrices. Ut venenatis tellus in metus vulputate. At varius vel pharetra vel turpis nunc eget. Purus ut faucibus pulvinar elementum integer enim neque.</p>
        </div>
    </section>
    <section id="skills" class="flex-container">
        <div class="text-wrapper">
            <h2>Skills/Experience</h2>
            <ul>
                <li>Ornare quam viverra orci</li>
                <li>Turpis massa sed elementum tempus</li>
                <li>Malesuada fames ac turpis egestas</li>
                <li>Sit amet mauris commodo quis</li>
            </ul>
        </div>
        <div class="text-wrapper">
            <ul>
                <li>Ornare quam viverra orci</li>
                <li>Turpis massa sed elementum tempus</li>
                <li>Malesuada fames ac turpis egestas</li>
                <li>Sit amet mauris commodo quis</li>
            </ul>
            <button>View Resume</button>
        </div>
    </section>
    <section id="design-samples">
        <h2 id="design-title">Design Samples</h2>
        <div id="slides">
            <img src="img/bigfoot-skate.png" alt="Bigfoot Skate">
            <img src="img/hapka-landscape.png" alt="Hapka Landscape">
            <img src="img/happy-acres.png" alt="Happy Acres">
            <img src="img/photography-site.png" alt="Photography Portfolio">
            <img src="img/red-horizon.png" alt="Red Horizon">
        </div>   
        <img id="slide" src="img/bigfoot-skate.png" alt="Bigfoot Skate"></p>
        <h4 id="caption">Bigfoot Skate</h4> 
        <div>
            <button id="design-button">View More</button>
        </div>
    </section>

    <section id="contact">
        <h2 id="form-label">Contact Me</h2>
        <form action="sendmail.php" method="post" name="contact_form" id="contact_form">
            <fieldset>
                <legend>Contact Information</legend>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>"><br>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>"><br>
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>"><br>
                <label for="subject">Subject:</label>
			    <input type="text" name="subject" id="subject" value="<?php echo $_REQUEST['subject'] ?>"><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" value="<?php echo $_REQUEST['message'] ?>"></textarea>
                <legend>Submit</legend>
                <label>&nbsp;</label>
                <input type="submit" id="submit" value="Send Email">
            </fieldset>
        </form>
    </section> -->
    <div>
        <h2>   
        <?php 
            if (isset($_REQUEST['email'])) {
                $admin_email = "bathursk@gmatc.matc.edu";

                $email = $_REQUEST['email'];
                $name = $_REQUEST['first_name'] . " " . $_REQUEST['last_name'];
                $subject = $_REQUEST['subject']; 
                $message = $_REQUEST['message'];

                $body = "From: " . $name . "\n";
                $body .= "Email: " . $email . "\n";
                $body .= "Subject: " . $subject . "\n";
                $body .= "Message: " . $message;
                

                $headers = "From: " . $name . " <" . $email . "> \r\n";
                $headers .= "CC: " . $name . " <" . $email . ">";

                mail($admin_email, $subject, $body, $headers);

                echo "Thank you for contacting me! I will get back to you soon.";
                }
                else {
                    echo "There has been an error - please try again.";
                }
         ?>
         </h2>  
        </div>

<footer>
    <p>Kate Bathurst &copy; 2022</p>
</footer>
<script src="slideshow.js"></script>
<script src="form.js"></script>
</body>
</html>