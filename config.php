

<?php
// config.php
define("WOWZA_HOST","http://18.218.195.129:1935");
define("WOWZA_SERVER_INSTANCE", "_defaultServer_");
define("WOWZA_VHOST_INSTANCE", "_defaultVHost_");
define("WOWZA_USERNAME", "fitfistream");
define("WOWZA_PASSWORD", "Toronto123");


// It is simple to create a setup object for transporting our settings
$setup = new Com\Wowza\Entities\Application\Helpers\Settings();

$setup->setHost("http://18.218.195.129:1935");
$setup->setUsername("fitfistream");
$setup->setPassword("Toronto123");

// Connect to the server or deal with statistics NOTICE THE CAPS IN COM AND WOWZA
$server = new Com\Wowza\Server($setup);
$sf = new Com\Wowza\Statistics($setup);
$response = $sf->getServerStatistics($server);
var_dump($response);

// $sf = new Com\Wowza\StreamFile($setup);
// $response = $sf->getAll();
// var_dump($response);
// var_dump($response);
//  $sf =new Com\Wowza\StreamFile("live","MyStream");
// $response = $sf->get();
// var_dump($response);

