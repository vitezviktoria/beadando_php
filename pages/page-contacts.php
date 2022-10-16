<div class="contacts">
    <h1>Elérhetőségeink</h1>

    <p>Telefonszám: +36 30 123 4567</p>
    <p>E-mail cím: loremipsum@gmail.com</p>
    <p>Cím: 7621 Pécs, Hunyadi út 4.</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2717.3339788766316!2d18.226394800148874!3d46.07525912290718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4742b1a18d12fb6f%3A0xf8b2d26f48deb7ce!2sP%C3%A9cs-Belv%C3%A1rosi%20templom%20(Dzs%C3%A1mi)!5e1!3m2!1shu!2shu!4v1610813980788!5m2!1shu!2shu" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<section>

    <h2>Tegye fel kérdését!</h2>

<?php
    
$db = DatabaseConnection();
    
$valName = "";
$valEmail = "";
$valSubject = "";
$valMessage = "";
    
if(isset($_POST['sendMessage'])){
        
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    
    $error = false;
    
    if(strlen($name) < 1){
        $error = "Név megadása kötelező!";
    }
    if(strlen($email) < 1){
        $error = "E-mail cím megadása kötelező!";
    }
    if(strlen($subject) < 1){
        $error = "Mező kitöltése kötelező!";
    }
    if(strlen($message) < 1){
        $error = "Üzenet írása kötelező!";
    }
    
    if($error){
        
        $valName = $name;
        $valEmail = $email;
        $valSubject = $subject;
        $valMessage = $message;
        
        echo '<p class="error">Hiba! '.$error.'</p>';
    }
    else{
        $sql = "INSERT INTO contact VALUES (NULL, :name, :email, :subject, :message, :date)";
        
        $values = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'date' => date("Y-m-d H:i:s")
        ];
        
        $query = $db->prepare($sql);
        $query->execute($values);
    
        echo '<p class="success">Az üzenetet sikeresen elküldte!</p>';
    }
    
}

?>
    <form method="post" action="">
        <label for="inputName">Az Ön neve*</label>
        <input type="text" name="name" id="inputName" maxlength="50" value="<?= $valName ?>">
        <label for="inputEmail">E-mail címe*</label>
        <input type="email" name="email" id="inputEmail" maxlength="256" value="<?= $valEmail ?>">
        <label for="inputSubject">Tárgy*</label>
        <input type="subject" name="subject" id="inputSubject" maxlength="100" value="<?=$valSubject ?>">
        <label for="inputMessage">Üzenet törzse*</label>
        <textarea name="message" id="inputMessage" maxlength="5000" value="<?= $valMessage ?>"></textarea>
        <input type="submit" name="sendMessage" value="Küldés">
    </form>
    <h5>A *-gal jelölt mezők kitöltése kötelező!</h5>

</section>
</div>

<!-- END: MAIN CONTENT -->
