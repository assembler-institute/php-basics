<?php
    require_once("config/config.php");
    include(ROOT_PATH . "includes/a_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(ROOT_PATH . "includes/head-tag-contents.php");?>
</head>
<body>
    <?php include(ROOT_PATH . "includes/nav.php");?>
    <main class="main">
            <div class="container" id="main-content">
                <div class="container-link">
                    <?php
                        $links = ["print", "iterators", "operators", "dates", "conditionals", "types", "maths", "strings", "arrays", "functions", "phpinfo" ];
                        foreach ($links as $link) {
                            echo "<button type='button'><a href='pages/$link.php'>$link</a></button>";
                            echo "<br>";
                        }
                    ?>
                </div>
            </div>
        </main>
        <?php include(ROOT_PATH . "includes/footer.php");?>
</body>
</html>