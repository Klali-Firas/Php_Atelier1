<?php
function display_menu() {
    echo '<ul>';
    for ($i = 3; $i <= 10; $i++) {
        echo '<li><a href="ex' . $i . '.php">Exercice ' . $i . '</a></li>';
    }
    echo '</ul>';
}
?>
