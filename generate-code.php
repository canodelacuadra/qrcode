<?php 
if(isset($_POST) && !empty($_POST)) {
    include('./phpqrcode/qrlib.php'); 
    $codesDir = "codes/";   
    $codeFile = date('d-m-Y-h-i-s').'.png';
    QRcode::png($_POST['data'], $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
    echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
      echo $_POST['data'];
} else {
    header('location:./');
}
?>