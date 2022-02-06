<?php

$g = new Sel();
$id = $_SESSION['user']['id'];
$man=$g->select('cmd',
[
    ['id','=',$id]
]
);

$name = $man[0]['name'];
// var_dump($man[0]['id']);
$name = explode(" ",$name);
$fname= $name[0];
$lname = $name[1];

say(
    '<div class="fixed-profile">
    <div class="premium-border">
        <img src="upload/'.$man[0]['pic'].'" class="profile-avatar"/>
    </div>
    <div class="mt-3">
        <h6 class="text-white font-14 mb-1"></h6>
        <p class="text-white font-13 mb-0">'.$man[0]['name'].'</p>
    </div>
    <p class="text-white font-13 mb-0">'.$man[0]['email'].'</p>
    
</div>'
);

?>