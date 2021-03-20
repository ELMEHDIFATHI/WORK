

<?php
require "users.php";
$users=new users();

$users->set_nom("mehdi");
$users->set_prenom("fathi");
$users->set_email("mehdifathi@gmail.com");
$users->set_password("mehdiRT12");
$users->set_role("user");
$users->set_tele("+2127Y32784932");


// $users->save();
//$users->destroy(1);
// $users->update();
$users->get();







