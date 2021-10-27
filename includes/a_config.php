<?php
    switch ($_SERVER["SCRIPT_NAME"]) {
        case "/php-basics/pages/print.php":
            $CURRENT_PAGE = "Print"; 
            $PAGE_TITLE = "Print Page";
			break;
        case "/php-basics/pages/iterators.php":
            $CURRENT_PAGE = "Iterators"; 
            $PAGE_TITLE = "Iterators Page";
            break;
        case "/php-basics/pages/operators.php":
            $CURRENT_PAGE = "Operators"; 
            $PAGE_TITLE = "Operators Page";
            break;
        case "/php-basics/pages/dates.php":
            $CURRENT_PAGE = "Dates"; 
            $PAGE_TITLE = "Dates Page";
            break;
        case "/php-basics/pages/conditionals.php":
            $CURRENT_PAGE = "Conditionals"; 
            $PAGE_TITLE = "Conditionals Page";
            break;
        case "/php-basics/pages/types.php":
            $CURRENT_PAGE = "Types"; 
            $PAGE_TITLE = "Types Page";
            break;
        case "/php-basics/pages/maths.php":
            $CURRENT_PAGE = "Maths"; 
            $PAGE_TITLE = "Maths Page";
            break;
        case "/php-basics/pages/strings.php":
            $CURRENT_PAGE = "Strings"; 
            $PAGE_TITLE = "Strings Page";
            break;
        case "/php-basics/pages/arrays.php":
            $CURRENT_PAGE = "Arrays"; 
            $PAGE_TITLE = "Arrays Page";
            break;
        case "/php-basics/pages/functions.php":
            $CURRENT_PAGE = "Functions"; 
            $PAGE_TITLE = "Functions Page";
            break;
        case "/php-basics/pages/phpinfo.php":
            $CURRENT_PAGE = "Phpinfo"; 
            $PAGE_TITLE = "Phpinfo Page";
            break;
        default:
            $CURRENT_PAGE = "Index";
            $PAGE_TITLE = "Welcome to my page";
    }
