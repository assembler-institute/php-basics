<?php
    require_once("config/config.php");
?>
<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head-tag-contents.php");?>
</head>
<body>
    <?php include("includes/nav.php");?>
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
        <?php include("includes/footer.php");?>
</body>
</html>