<?php
    $page = "contact";
	// include '../config.php';
	if(isset($_POST['submit'])){
        $from = $_POST['email']; 
        $name = $_POST['fname'] + " " + $_POST['lname'];
        $subject = "Test Subject";
        $description = $_POST['description'];
            $to = "miggs_1338@yahoo.com"; 
            $subject = "Contact Form - " . $category . " - " . $name . " has a inquiry!";
            $description = $name .  " (" . $from . ") wrote the following:" . "\n\n" . $_POST['description'];

            $headers="From: e247_kja@yahoo.com\n"
                . "Content-Type: text/plain; charset=$charset; format=flowed\n"
                . "MIME-Version: 1.0\n"
                . "Content-Transfer-Encoding: 8bit\n"
                . "X-Mailer: PHP\n";
            mail($to,$subject,$description,$headers);
            
            // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
            $thanks='Thank you for your inquiry!  We will respond to you as soon as possible!';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/styles.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>Above & Beyond Legendary Finishes | Contact</title>
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/meta.php'); ?>
    <meta name="desription" content="Above & Beyond Lengendary Finishes offers a wide range of services in the Fresno area, from custom home interior and exterior painting to new construction.">
</head>
<body>
    <meta name="desription" content="Contact Above and Beyond Legnedary Finishes today and let us bring your ideas to life.">
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/nav.php'); ?>
    
    <div class="sub-slider" id="contact-header"></div>

    <div class="sub-body">
        <div class="container">
            <h1>Contact</h1><br>
            <p class="mb-20">We offer a wide range of services! Please feel free to contact us if you have any questions.</p>
            <div id="contact-container">
                <div class="text-wrapper">
                    <h3>Efrain Hernandez</h3>
                    <a href="559-458-5420">559.458.5420</a><br>
                    <a href="email:e247_kja@yahoo.com">e247_kja@yahoo.com</a>
                </div>
                <div class="text-wrapper">
                    <div class="email-wrapper">
                        <h2>
                            Have a question? Need a quote? <br>
                            Contact us!
                        </h2>
                        <form action="" method="POST" class="email-form">
                            <input type="text" id="fname" name="firstname" placeholder="First Name (Required)" required><br>

                            <input type="text" id="lname" name="lastname" placeholder="Last Name (Required)" required><br>

                            <input type="text" id="email" name="email" placeholder="Email (Required)" required><br>

                            <input type="text" id="phone" name="phone" onInput="this.value = phoneFormat(this.value)" placeholder="Phone (Required)" required><br>

                            <textarea id="description" name="description" placeholder="Add a brief description of job (Required)" required></textarea><br>
                            <div class="g-recaptcha" data-sitekey="6Ld0D_IlAAAAABDSxCTTOrRDasI4uGv8wxgrSA94" data-callback="enableBtn"></div>
                            <br/>
                            <input type="submit" value="SEND" class="read-more-btn disabled" id="contact-form-btn" disabled>
                            <input type="hidden" name="submit" value="SEND" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/footer.php'); ?>
    
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/sub-footer.php'); ?>

</body>

</html>