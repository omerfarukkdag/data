<?php

$url = "https://www.omerfarukdag.org";

$data = file_get_contents($url);

preg_match_all('@<span>Context (.*?)</span>@si', $data, $dag);

$faruk = implode("", $dag[1]);

echo $faruk;

?>