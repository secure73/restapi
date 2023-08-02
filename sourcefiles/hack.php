<?php
if(isset($_POST["fname"]))
{
    //this is whaat shall be saved in DB
    echo base64_encode($_POST["fname"]);
}
?>

<form action="" method="post">
    <input type="text" name="fname">

<button type="submit">senden</button>

</form>