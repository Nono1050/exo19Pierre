<?php
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'formations':
            include '../../view/formations.php';
            break;
        case 'formulaire':
            include '../../view/formulaire.php';
            break;
        case 'newsletter':
            include '../../view/newsletter.php';
            break;
            case 'programme':
                include '../../view/programme.php';
                break;
        default:
            include '../../view/404error.php';
            break;
    }
} else {
    include '../../view/accueil.php';
}
?>

