<?php

namespace Jcowie\MageCasts\Controller\Index;

use Magento\Framework\App\Action\Context;
use Jcowie\MageCasts\Model\CmsPages;


class Index extends \Magento\Framework\App\Action\Action
{
    /** @var  \Jcowie\MageCasts\Model\CmsPages */
    private $cmsPages;

    public function __construct(Context $context, CmsPages $cmsPages)
    {
        $this->cmsPages = $cmsPages;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->getResponse()->setHeader('content-type', 'text/plain');
        $this->getResponse()->appendBody('Hello CMS');
    }
}
