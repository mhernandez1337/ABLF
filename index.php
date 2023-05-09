<?php
    $page = "home";
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
    
    <title>Above & Beyond Legendary Finishes</title>
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/meta.php'); ?>
</head>
<body>
    <meta name="desription" content="Above & Beyond Lengendary Finishes offers a wide range of services in the Fresno area, from custom home interior and exterior painting to new construction.">
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/nav.php'); ?>
    
    <div class="slider-container">
        <div class="slider-carousel">
            <div class="slider" id="image-1"></div>
            <div class="slider" id="image-2"></div>
            <div class="slider" id="image-3"></div>
            <div class="slider" id="image-4"></div>
        </div>
        <div id="slider-text">
            <h1>Above & Beyond Legendary Finishes</h1>
            <p>A league of its own</p>
        </div>
    </div>

    <div id="services">
        <div class="container">
            <div id="services-container">
                <div class="section-header">
                    <h2>Services</h2>
                    <div class="header-line-large" style="width:245px;"></div>
                    <div class="header-line-small"></div>
                    <p>
                        We offer a wide range of services in the Fresno area, from custom home interior and exterior painting to new construction. There's no job too big or too small that we can't handle! Give us a call to discuss your next big project, and let Above & Beyond Legendary Finishes help bring your ideas to life.
                    </p>
                </div>
                <div id="services-callouts">
                    <div class="service-callout">
                        <div class="callout-img-wrapper">
                            <img src="../images/cabinet-hover.png" alt="Cabinetry Finishes" style="width: 70px;">
                        </div>
                        <h3>Cabinetry Finishes</h3>
                        <a href="/services" class="read-more-btn">Read More</a>
                    </div>
                    <div class="service-callout">
                        <div class="callout-img-wrapper">
                            <img src="../images/artist-hover.png" alt="Interior/Exterior Painting" style="width: 70px;">
                        </div>
                        <h3>Interior/Exterior Painting</h3>
                        <a href="/services" class="read-more-btn">Read More</a>
                    </div>
                    <div class="service-callout">
                        <div class="callout-img-wrapper">
                            <img src="../images/pressure-washer-hover.png" alt="Pressure Washer Services" style="width: 70px;">
                        </div>
                        <h3>Pressure Washer Services</h3>
                        <a href="/services" class="read-more-btn">Read More</a>
                    </div>
                    <div class="service-callout">
                        <div class="callout-img-wrapper">
                            <img src="../images/tool-box-hover.png" alt="New Construction" style="width: 70px;">
                        </div>
                        <h3>New Construction</h3>
                        <a href="/services" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="projects">
        <div class="container">
            <div id="projects-container">
                <div class="section-header">
                    <h2>Projects</h2>
                    <div class="header-line-large" style="width:245px;"></div>
                    <div class="header-line-small"></div>
                    <div class="header-line"></div>
                    <p>
                        At Above & Beyond Legendary Finishes, versatility and variety are what we strive to offer our customers. We've completed numerous projects throughout the Fresno area. Below are a few exciting examples of work that we can complete for your business or home!
                    </p>
                </div>

                <div class="project-text-img">
                    <img src="../images/shaver_lake_cabin_11.jpg" alt="Shaver Lake Cabin" class="mr-40">
                    <div class="project-text">
                        <h2>Shaver Lake Cabin</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lacinia at quis risus sed vulputate odio ut enim blandit. Sapien faucibus et molestie ac feugiat sed lectus. Venenatis cras sed felis eget velit aliquet. <br><br>
                        </p>
                        <p>
                            Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Posuere sollicitudin aliquam ultrices sagittis orci a. Pharetra vel turpis nunc eget lorem dolor sed viverra. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. 
                        </p>
                        
                        <a href="https://ablfinishes.com/projects/shaver_lake/" class="read-more-btn">View The Project <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="project-text-img">
                    <img src="../images/other_cabinetry_job_30.jpg" alt="Other Cabinetry Job" class="ml-40" id="mobile">
                    <div class="project-text">
                        <h2>Kitchen Cabinet Painting</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lacinia at quis risus sed vulputate odio ut enim blandit. Sapien faucibus et molestie ac feugiat sed lectus. Venenatis cras sed felis eget velit aliquet. <br><br>
                        </p>
                        <p>
                            Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Tincidunt lobortis feugiat vivamus at augue eget arcu dictum varius. Posuere sollicitudin aliquam ultrices sagittis orci a. Pharetra vel turpis nunc eget lorem dolor sed viverra. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa. 
                        </p>
                        
                        <a href="https://ablfinishes.com/projects/other_cabinetry_job/" class="read-more-btn">View The Project <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <img src="../images/other_cabinetry_job_30.jpg" alt="Other Cabinetry Job" class="ml-40" id="desktop">
                </div>

            </div>
        </div>
    </div>

    <div class="contact-banner">
        <div class="container">
            <h2>Contact Us Today!</h2><br>
            <h3>559.459.5420</h3>
        </div>
    </div>
    
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/footer.php'); ?>
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/sub-footer.php'); ?>

</body>

</html>