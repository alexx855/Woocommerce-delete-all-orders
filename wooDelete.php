<?php
// By default wp_ for standard WP-installations
$prefix = 'wp_';

// Database infos here
$host = 'localhost';
$username = 'user';
$password = 'password';
$db = 'dbname';

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
    die('Whoops: '.$conn->connect_error);
}

$sql = 'DELETE wu FROM `wp_users` wu INNER JOIN '.$prefix.'_usermeta ON wu.ID = '.$prefix.'_usermeta.user_id WHERE meta_key = 'wp_capabilities' AND meta_value NOT LIKE '%administrator%'';

if ($conn->query($sql) === true) {
    echo 'Users deleted. '.PHP_EOL;
} else {
    echo 'Whoops: '.$conn->error;
}

echo 'Fixed! Your Wordpress users should be empty! :-)';
