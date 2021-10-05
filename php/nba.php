<?php

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    $url = "https://free-nba.p.rapidapi.com/players?search=$firstname%20$lastname&per_page=25&page=0";

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: free-nba.p.rapidapi.com",
            "x-rapidapi-key: 93929a08ebmsh1d9489f52854d26p1ca74djsna9c4054aea22"
        ],
    ]);

//echo($url);
    $response = json_decode(curl_exec($curl));
    $err = curl_error($curl);

    $playerInfo = $response->data;

    $specificPlayer = $playerInfo[0];


    $playerheight_feet = $specificPlayer->height_feet;
    $playerheight_inches = $specificPlayer->height_inches;
    $playerheight = $playerheight_feet ."'" .  $playerheight_inches . '"';
    $playerFullName = $specificPlayer->first_name . ' ' . $specificPlayer->last_name;
    $playerPosition = $specificPlayer->position;
    $playerTeam = $specificPlayer->team;
    $playerTeamName = $playerTeam->full_name;
    $playerGifSearch = $specificPlayer->first_name . '+' . $specificPlayer->last_name;
    if ($playerGifSearch === "Ike+Anigbogu"){
        $playerGifSearch = "Myles+Turner";
    } else {
        $playerGifSearch = $specificPlayer->first_name . '+' . $specificPlayer->last_name;
    }

    if ($playerFullName === "Ike Anigbogu"){
            $playerFullName = "Myles Turner";
        } else {
            $playerFullName = $specificPlayer->first_name . ' ' . $specificPlayer->last_name;
        }


    curl_close($curl);



    if ($err) {
        echo "cURL Error #:" . $err;
    }

