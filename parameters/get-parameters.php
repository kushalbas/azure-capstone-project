<?php

// Configuration for database connection

# REMOTE DECLARATION
$host       = getenv('DB_HOST');
$username   = getenv('DB_USERNAME');
$password   = getenv('DB_PASSWORD');
$db_name     = getenv('DB_DATABASE');
$sslcert    = 'ssl/DigiCertGlobalRootCA.crt.pem';
#$sslcert   = getenv('DB_SSLCERT');

# LOCAL DECLARATION
#$host       = 'SQLdbENDPOINT';
#$username   = 'USERNAME';
#$password   = 'PASSWORD';
#$db_name    = 'DBNAME';
#$sslcert    = 'ssl/DigiCertGlobalRootCA.crt.pem';

# Test for local file creation
#$sslcertstring   = getenv('DB_SSLCERT');
#$var_str = var_export($sslcertstring , true);
#$testpemcontent = "$var_str";
#file_put_contents('testcertsb.pem', $testpemcontent);
#$sslcert    = "testcertsb.pem";
?>
