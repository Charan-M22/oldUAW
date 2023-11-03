<?php
require './vendor/autoload.php';
use \Mailjet\Resources;
$mj = new \Mailjet\Client(getenv('4950783a96a264d3bb58299b820a5b17'), getenv('6282bbab026c7425441b11c88ccb645a'),true,['version' => 'v3.1']);
$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "vinothkumarbalasubramaniam1993@gmail.com",
                'Name' => "Mailjet Pilot1"
            ],
            'To' => [
                [
                    'Email' => "balavinoth99@gmail.com",
                    'Name' => "passenger 11"
                ]
            ],
            'Subject' => "Your email flight plan!",
            'TextPart' => "Dear passenger 1, welcome to Mailjet! May the delivery force be with you!",
            'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href=\"https://www.mailjet.com/\">Mailjet</a>!</h3><br />May the delivery force be with you!"
        ]
    ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
echo $response->success() && var_dump($response->getData());
?>

