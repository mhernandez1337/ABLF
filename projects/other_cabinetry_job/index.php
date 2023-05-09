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
    <title>Other Cabinetry Job</title>
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/meta.php'); ?>
</head>
<body>
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/nav.php'); ?>
    
    <div class="sub-slider" id="projects-header">
    
    </div>

    <div class="sub-body">
        <div class="container">
            <h1>Other Cabinetry Job</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div id="projects-container">
                <?php 
                    for($i = 1; $i <= 30; $i++){
                        echo '
                            <div class="project-image-wrapper">
                                <a data-fancybox="other-cabinetry-job" href="/images/other_cabinetry_job_' . $i . '.jpg">
                                    <img src="/images/other_cabinetry_job_t_' . $i . '.jpg" alt="Other Cabinetry Job">
                                </a>
                            </div>';
                    }
                ?>
            </div>
        </div>
    </div>
    
    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/footer.php'); ?>

    <?php include ($_SERVER["DOCUMENT_ROOT"] . '/sub-footer.php'); ?>

</body>

</html>