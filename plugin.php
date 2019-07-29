<?php
/*
Plugin Name: Device Short URL
Plugin URI: http://yourls.org/
Description: Add -<device> to shorturls to redirect depends on device
Version: 0.1
Author: juntao liu
Author URI: 
*/

include_once 'spyc/Spyc.php';
include_once 'device-detector/autoload.php';
use DeviceDetector\DeviceDetector;


yourls_add_filter( 'get_request', 'device_get_request' );

function device_get_request( $request ) {
  if(substr($request, -1)=='+') return $request;

  $ua = yourls_get_user_agent();

  $dd = new DeviceDetector($ua);
  $dd->parse();
  $deviceName = $dd->getDeviceName();

  $deviceRequest = $request .'-'. $deviceName;
  $deviceLongURL = yourls_get_keyword_longurl( $deviceRequest );
  if(!empty($deviceLongURL)) {
    return $deviceRequest;
  } else {
    return $request;
  }

}
