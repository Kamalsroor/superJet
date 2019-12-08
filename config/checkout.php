<?php

return [


    /*
    Set all your configuration here

    If you want to have multiple configuration sets, copy and paste
    the configuration lines and create a new array with a different variable name
    this array can then be parsed into the Merchant constructor from process.php
    
    The debug configuration setting is useful for printing requests and responses
    If you're receiving an error or unexpected output, set this flag to TRUE
    The debug output will help indicate the cause of the problem
    
    Please comment the proxy settings if you do not wish to use a proxy
    
    */

    // If using a proxy server, uncomment the following proxy settings

    // If no authentication is required, only uncomment proxyServer
    // Server name or IP address and port number of your proxy server
    // 'proxyServer' => "server:port",

    // Username and password for proxy server authentication
    // 'proxyAuth' => "username:password",

    // The below value should not be changed
    // 'proxyCurlOption' =>  CURLOPT_PROXYAUTH;
    
    // The CURL Proxy type. Currently supported values: CURLAUTH_NTLM and CURLAUTH_BASIC 
    // 'proxyCurlValue' => CURLAUTH_NTLM;
    
    
    // If using certificate validation, modify the following configuration settings

    // alternate trusted certificate file
    // leave as "" if you do not have a certificate path
    // 'certificatePath' => "C:/ca-cert-bundle.crt",


    // possible values:
    // FALSE = disable verification
    // TRUE = enable verification
    'certificateVerifyPeer' => FALSE,


    // possible values:
    // 0 = do not check/verify hostname
    // 1 = check for existence of hostname in certificate
    // 2 = verify request hostname matches certificate hostname
    'certificateVerifyHost' => 0,

    // Base URL of the Payment Gateway. Do not include the version.
    'gatewayUrl' => "https://secure.uat.tnspayments.com/api/nvp",
    
    'merchantId' => "TESTCSMERCHANT",
    
    'apiUsername' => "Merchant.TESTCSMERCHANT",
    
    'password' => "0e2d36abbce6740dd1a3790867c734c5",
    
    'debug' => FALSE,
    
    'version' => "28",

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the broadcast connections that will be used
    | to broadcast events to other systems or over websockets. Samples of
    | each available type of connection are provided inside this array.
    |
    */

    
];
