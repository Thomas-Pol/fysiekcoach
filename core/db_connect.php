<?php
session_start();

include("../../admin-panel/core/functions.php");
/**
 * Voor de MAC gebruikers;
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "vamarieken";

/**
 * Voor de Windows gebruikers;
 */
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "webshop";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
}

define("BASEURL","http://localhost/bureau/fysiekcoach/");
define("BASEURL_CMS","http://localhost/bureau/fysiekcoach/admin-panel/");

function prettyDump ( $var ) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}