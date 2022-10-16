
<!-- MAIN CONTENT -->
<?php
    
$db = DatabaseConnection();

if(!isset($_GET['read'])){
    
    $sql = "SELECT id,title,image,content FROM news ORDER BY id DESC";
    
    $query = $db->query($sql);
    $result = $query->fetchAll( PDO::FETCH_ASSOC );
    
    echo '<ul class="news">';
    echo '<h1>Legújabb híreink</h1>';

    foreach($result as $record){
        
        $a = $record['id']; 
        $title = $record['title'];
        $content = $record['content'];
        $image = $record['image'];

            echo '<li class="preview">

                <img src='.$image.'>

                <div>
                    <h2>'.$title.'</h2>
                    <p>'.$content.'</p>
                </div>
                <a href="index.php?page=news&read='.$a.'">Bővebben</a>

            </li>';
    }
echo '</ul>';
}

else{
    $read = $_GET['read'];
    
    $sql = "SELECT * FROM news WHERE id=:id";
    
    $query = $db->prepare($sql);
    $query->execute(['id' => $read]);
    $record = $query->fetch( PDO::FETCH_ASSOC );
    
    if($record){

        $title = $record['title'];
        $content = $record['content'];
        $image = $record['image'];

        echo '<div class="hirek">';
        echo '<h1>'.$title.'</h1>';
        echo '<img src='.$image.'>';
        echo '<p>'.nl2br($content).'</p>';
        echo '</div>';
        
        $query = $db->prepare($sql);
        $query->execute(['id' => $read]);
    }
    else{
        echo '<div class="hirek">';
        echo '<h1>Nincs ilyen</h1>';
        echo '<p>A keresett cikk nem található!</p>';
        echo '</div>';
    }
    
}
?>

<!-- END: MAIN CONTENT -->
