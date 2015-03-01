<?php

include __DIR__ . "/lib/AndroidPusher/Pusher.php";

// https://code.google.com/apis/console/
$apiKey = "AIzaSyDHJ0df-dFNIpz--NSMcePemVXx4OLE2pE"; // API Key de nuestro proyecto
$msg = ( isset( $_GET[ 'msg' ] ) ? $_GET[ 'msg' ] : "Default message" ) . ' [' . date( 'Y-m-d H:i:s' ) . "]";
$regId = ( isset( $_GET[ 'regID' ] ) ? $_GET[ 'regID' ] : "" );

if ( $regId != "" ) {
    $pusher = new AndroidPusher\Pusher( $apiKey );
    $pusher->notify( $regId, $msg );

    echo "<pre>";
    var_dump( $pusher->getOutputAsArray() );
    echo "</pre>";
} else {
    echo "<br/>GET variable <b>msg</b> is optional!";
    echo "<br/>GET variable <b>regID</b> is needed!";
}
