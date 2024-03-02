<?php

require_once("vendor/autoload.php");

use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;


$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com', // can be a mailto: or your website address
        'publicKey' => 'BAjrwSGHu5nCW2nE1u9MmdUXZosDWIByptd0pZQF0P-7zfwuP7eCAIgtViBUDMixfpvcZyykTnkzDoxcuFV2QD4', // (recommended) uncompressed public key P-256 encoded in Base64-URL
        'privateKey' => 'T99Y5IcTbDUb6B-IUx7br5Ijf_UEaimMe8vY2xvc0zM', // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL 
    ],
];

//Test Token {"endpoint":"https://fcm.googleapis.com/fcm/send/fHhEmb5v66A:APA91bHahvRdjVa1J5InSaUvBMOW8lVwV0Ac33wzOcA825mHd-i6_RZgSXrUUSZcQ5jbKikc932rDbj0PImnA-HJtn2rwZ4OggUS2iqZ0ALBIDAOhORVdEVC7N78fCNzgV-a4nwErXP2","expirationTime":null,"keys":{"p256dh":"BBMRHU1PSGicxUT-X--cJB8bSuUYX0c8lJL6unZJgMpOMPZpscgTBWZqcKjFEEHR5D95uBRgJHjO2uNhCn1pVgY","auth":"xKO0X8qbzPp6m4rhb2n07g"}}

