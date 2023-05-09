<?php
    $page = "projects";
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
    <meta name="desription" content="">
    <title>Above & Beyond Legendary Finishes | Projects</title>
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/meta.php'); ?>
    <meta name="description" content="At Above & Beyond Legendary Finishes, we pride ourselves in delivering the highest quality of work to our customers. Below are a few projects we completed through the Fresno area. See the quality for yourself!">
</head>
<body>
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/nav.php'); ?>
    
    <div class="sub-slider" id="projects-header"></div>

    <div class="sub-body">
        <div class="container">
            <h1>Projects</h1>
            <p>At Above & Beyond Legendary Finishes, we pride ourselves in delivering the highest quality of work to our customers. Below are a few projects we completed through the Fresno area. See the quality for yourself!</p>
            <div id="projects-container">
                <a href="shaver_lake" class="project-wrapper">
                    <h3>Shaver Lake Cabin</h3>
                    <img src="../images/shaver_lake_cabin_t_11.jpg" alt="Shaver Lake Cabin">
                </a>
                <a href="muses_day_spa_and_wellness_center" class="project-wrapper">
                    <h3>Muses Day Spa & Wellness Center</h3>
                    <img src="../images/muses_day_spa_t_44.jpg" alt="Muses Day Spa & Wellness Center">
                </a>
                <a href="nolan_cabinetry_job" class="project-wrapper">
                    <h3>Nolan Cabinetry Job</h3>
                    <img src="../images/nolan_cabinetry_job_t_16.jpg" alt="Muses Day Spa & Wellness Center">
                </a>
                <a href="other_cabinetry_job" class="project-wrapper">
                    <h3>Other Cabinetry Job</h3>
                    <img src="../images/other_cabinetry_job_t_30.jpg" alt="Other Cabinetry Job">
                </a>
                <a href="ogata_exterior_repaint_job" class="project-wrapper">
                    <h3>Ogata Exterior Repaint Job</h3>
                    <img src="../images/ogata_t_27.jpg" alt="Ogata Exteiror Repaint Job">
                </a>
                <a href="floor_refinish" class="project-wrapper">
                    <h3>Floor Refinish Job</h3>
                    <img src="../images/floor_refinish_t_29.jpg" alt="Floor Refinish Job">
                </a>
            </div>
        </div>
    </div>
    
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/footer.php'); ?>

    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/sub-footer.php'); ?>

</body>

</html>