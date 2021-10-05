<?php

$gifKey = "ELEGRt2oJaZaFyCUj4jGFEIFukt2yZsL";


$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
$gifUrl = "https://api.giphy.com/v1/gifs/search?q=$playerGifSearch&api_key=$gifKey&limit=15&rating=pg";



$gifImgs = '';

$response = (json_decode(file_get_contents($gifUrl)));

$gifData = $response->data;

     for ($i = 0; $i < 15; $i++){
//    $specificGif = $gifData[$i];
         $specificGif = $gifData[$i];
//    var_dump($specificGif);
         $gifImage = $specificGif->images;
//    var_dump($gifImage);
         $gifSize = $gifImage->fixed_height;
//    var_dump($gifSize);
         $gif = $gifSize->url;
//    var_dump($gif);
         $img =  "<img class='gif-style' src='$gif' id='gif'/>";
         $gifImgs .= $img;


     }



