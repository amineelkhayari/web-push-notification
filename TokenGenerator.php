<?php
require_once("vendor/autoload.php");

use Minishlink\WebPush\VAPID;

print_r(VAPID::createVapidKeys());

/*
Array ( [publicKey] => BAjrwSGHu5nCW2nE1u9MmdUXZosDWIByptd0pZQF0P-7zfwuP7eCAIgtViBUDMixfpvcZyykTnkzDoxcuFV2QD4 [privateKey] => T99Y5IcTbDUb6B-IUx7br5Ijf_UEaimMe8vY2xvc0zM )
*/