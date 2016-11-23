<?php
if (isset($_GET['content'])) {
    switch ($_GET['content']) {
        case 'tagebuch':
            echo "Haben Sie Ihr Medikament eingenommen?";
            break;
        case 'nebenwirkungen':
            echo "Haben Sie Nebenwirkungen?";
            break;
        case 'behandlung':
            echo "Ihre Einstellungen zu Medikamente und Behandlung";
            break;
        case 'bericht':
            echo "Wechselwirkung zwischen Medikament und Nebenwirkung";
            break;
        default:
            echo "Haben Sie Ihr Medikament eingenommen?";
    }
} else {
    echo "Haben Sie Ihr Medikament eingenommen?";
}
?>             

