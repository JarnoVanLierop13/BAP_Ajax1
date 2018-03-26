<?php
// Array with names
$a[] = "Counter-Strike: Global Offensive";
$a[] = "Rainbow Six Siege";
$a[] = "Dishonored";
$a[] = "Dishonored 2";
$a[] = "Dishonored: Death of the Outsider";
$a[] = "Minecraft";
$a[] = "Warframe";
$a[] = "Call of Duty Advanced Warfare";
$a[] = "Battlefield 4";
$a[] = "Black Desert Online";
$a[] = "Destiny 1";
$a[] = "Destiny 2";
$a[] = "Life is Strange";
$a[] = "Life is Strange Before the Storm";
$a[] = "Alien Isolation";
$a[] = "Hollow Knight";
$a[] = "Mass Effect 1";
$a[] = "World of Warcraft";
$a[] = "Rise of the Tomb Raider";
$a[] = "Terraria";
$a[] = "The Elder Scrolls V Skyrim";
$a[] = "The Division";
$a[] = "Subnautica";
$a[] = "Grand Theft Auto V";
$a[] = "fallOut 4";
$a[] = "PlayerUnknown's Battleground";
$a[] = "Assassin's Creed Syndicate";
$a[] = "Assassin's Creed Black Flag";
$a[] = "The elder Scrolls Online";
$a[] = "Titan Fall 2";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br> $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>