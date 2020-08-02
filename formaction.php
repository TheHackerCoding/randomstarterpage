<?php
function file_force_contents( $fullPath, $contents, $flags = 0 ){
    $parts = explode( '/', $fullPath );
    array_pop( $parts );
    $dir = implode( '/', $parts );
   
    if( !is_dir( $dir ) )
        mkdir( $dir, 0777, true );
   
    file_put_contents( $fullPath, $contents, $flags );
}
if(empty($_POST['name'])){
    header("Location: ./index.php");
    exit;
} else {
    $name = $_POST['name'];
}
if (empty($_POST['email'])){
    header("Location: ./index.php");
    exit;
} else {
    $email = $_POST['email'];
}
if (empty($_POST['message'])){
    header("Location: ./index.php");
     exit;   
} else {
    $message = $_POST['message'];
}
$info = array(
    'name' => $name,
    'email' => $email,
    'message' => $message
);
$infoJSON = json_encode($info);
$currrent = date("Y-m-d") . "|" . date("h:i:s") . ".json";
echo $currrent;
file_force_contents( $_SERVER['DOCUMENT_ROOT']."/assets/form/$currrent", $infoJSON, LOCK_EX );
header("Location: ./formconfirm.php");
?>