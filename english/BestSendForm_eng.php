<!doctype html>
<html>
<head>
    <title>send&nbsp;form</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emailCom = $_POST["comment"];//$texthier = $_POST["comment"];
    $naamsend = $_POST["naam"];//$naamsend=$_POST["naam"]; //naam verzender
    $achternaamSend = $_POST["achternaam"]; //achernaam verzender

}
?>
<div class="contactinfo">
    <div class="contactinfoB">
        <p>On this page you can leave your contact information or ask question regarding the university. We will try to contact you as soon as possible</p>
    </div>
</div>
<div class="Cform">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name:<br><input type="text" name="naam" placeholder="insert&nbsp;Name">
        <br>
        Last Name:<br><input type="text" name="achternaam" placeholder="insert&nbsp;Last Name">
        <br>
        e-mail:<br><input type="email" name="e-mail" placeholder="insert&nbsp;email">
        <br>
        comment:<br><textarea title="comment" id="comment" name="comment" rows=4 cols=8></textarea>
        <br>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
    </form>
</div>


<?php
$Nfile = fopen("mail_info_eng.txt", "w");
if (isset($_POST["submit"])) {
    $Nfile = fopen("mail_info.txt", "wb");
    $naamsend = $_POST["naam"]; //naam verzender
    $achternaamSend = $_POST["achternaam"]; //achernaam verzender
    $emailSend = $_POST["e-mail"];  //email verzender
    $emailCom = $_POST["comment"];
    $fullInfo = "Name:" . " " . $naamsend . "" . "Last Name:" . " " . $achternaamSend . " " . "mail:" . " " . $emailSend . " " . "comments:" . " " . $emailCom; //stelt email op met info
    fwrite($Nfile, $fullInfo);
    fclose($Nfile);

    //schrijft bestanden naar htdocs(de server)
}
?>



</body>
</html>