<?php
namespace App\Service;

use Psr\Log\LoggerInterface;

class MessageGenerator{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getRandomMessage(): string {
        $messages = [
            'Wat een leuke stage',
            'Geleuter, geleuter',
            'En nog maar een berichtje',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }

    public function testLogger(){
        $this->logger->info("Testing 124 message hallooooo");
    }
}
