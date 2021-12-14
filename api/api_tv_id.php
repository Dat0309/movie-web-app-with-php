<?php
    $cti = curl_init();

    curl_setopt($cti, CURLOPT_URL, "http://api.themoviedb.org/3/tv/".$id_tv."?api_key=" . $apikey);
    curl_setopt($cti, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($cti, CURLOPT_HEADER, FALSE);
    curl_setopt($cti, CURLOPT_HTTPHEADER, array("Accept: application/json"));

    $response = curl_exec($cti);
    curl_close($cti);
    $tv_id = json_decode($response);
    
    $cti2 = curl_init();

    curl_setopt($cti2, CURLOPT_URL, "http://api.themoviedb.org/3/tv/".$id_tv."/videos?api_key=" . $apikey);
    curl_setopt($cti2, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($cti2, CURLOPT_HEADER, FALSE);
    curl_setopt($cti2, CURLOPT_HTTPHEADER, array("Accept: application/json"));

    $response2 = curl_exec($cti2);
    curl_close($cti2);
    $tv_id_video = json_decode($response2);
    
    $cti3 = curl_init();

    curl_setopt($cti3, CURLOPT_URL, "http://api.themoviedb.org/3/tv/".$id_tv."/similar?api_key=" . $apikey);
    curl_setopt($cti3, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($cti3, CURLOPT_HEADER, FALSE);
    curl_setopt($cti3, CURLOPT_HTTPHEADER, array("Accept: application/json"));

    $response3 = curl_exec($cti3);
    curl_close($cti3);
    $tv_id_similar = json_decode($response3);
?>