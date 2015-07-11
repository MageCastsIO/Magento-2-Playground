<?php

namespace Jcowie\MageCasts\Model;

class CmsPages
{

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
