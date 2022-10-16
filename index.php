<?php 
include "functions.php";
include "pages/begin.php";

$page = "home";

if(isset($_GET['page'])){
    $page = $_GET['page'];
}

$file = "pages/page-".$page.".php";

if(is_file($file)){
    include $file;
}
else{
    echo '<div class="hirek">';
    echo '<h1>404</h1>';
    echo '<p>A kért oldal nem található!</p>';
    echo '</div>';
}

include "pages/end.php";
?>