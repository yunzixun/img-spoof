<?php
    
// configuration cache
$maxage = 3600;
$gmt = 7; // If your server datetime located in south east, so it means GMT+7.

// firewall
$firewall_origin = false;   // this to activate firewall (default is false)
$allow_no_referer = true;  // allow access with no referer policy (default is true)
$allow_origin = [ // just write the domain or sub domain without scheme and port
    'yourdomain1.com',
    'yourdomain2.com'
];