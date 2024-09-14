<?php
function includeStyles() {
    echo '<link rel="stylesheet" href="./style.css">';
}

function renderNav() {
    echo '<nav>';
    echo '<div class="nav-bar">';
    echo '<ul>';
    echo '<li><a href="./index.php">Accueil</a></li>';
    echo '<li><a href="./unepage.php">Une page</a></li>';
    echo '<li><a href="./uneautrepage.php">Une autre page</a></li>';
    echo '</ul>';
    echo '</div>';
    echo '</nav>';
}
