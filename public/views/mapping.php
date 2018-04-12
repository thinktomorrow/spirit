<?php
$page = filter_input(INPUT_GET, 'summon');
switch ($page) {
    case 'home':
        include('views/pages/home.php');
        break;
    case 'elements':
        include('views/pages/elements.php');
        break;
    case 'components':
        include('views/pages/components.php');
        break;
    case 'typography':
        include('views/pages/typo.php');
        break;
    case 'colors':
        include('views/pages/colors.php');
        break;
    case 'icons':
        include('views/pages/icons.php');
        break;
    default:
        include('views/pages/home.php');
        break;
}
?>