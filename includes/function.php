<?php
    include 'config.php';

    function getPlayerStats($platform,$CsgoNickname){
        $apiUrlPlayerStatsEndpoint='https://public-api.tracker.gg/v2/csgo/standard/profile/' 
        . $platform . '/' . $CsgoNickname;

    $ch = curl_init();

    curl_setopt ($ch, CURLOPT_URL, $apiUrlPlayerStatsEndpoint);
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array(
        'TRN-Api-Key:' . FN_API_KEY
    ));

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt( $ch, CURLOPT_HEADER, FALSE);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode ($response, true);

    }

    function getPlayerSegmentsStats($platform, $CsgoNickname, $segments){
        $apiUrlPlayerStatsEndpoint='https://public-api.tracker.gg/v2/csgo/standard/profile/' 
        . $platform . '/' . $CsgoNickname . '/segments'. '/' . $segments ;

    $ch = curl_init();

    curl_setopt ($ch, CURLOPT_URL, $apiUrlPlayerStatsEndpoint);
    curl_setopt ($ch, CURLOPT_HTTPHEADER, array(
        'TRN-Api-Key:' . FN_API_KEY
    ));

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt( $ch, CURLOPT_HEADER, FALSE);
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode ($response, true);
    }


/*
GET https://public-api.tracker.gg/v2/csgo/standard/profile/%7Bplatform%7D/%7BplatformUserIdentifier%7D
*/
?>