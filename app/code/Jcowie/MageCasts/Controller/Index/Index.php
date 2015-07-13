<?php

namespace Jcowie\MageCasts\Controller\Index;

use Magento\Framework\App\Action\Context;
use Jcowie\MageCasts\Model\CmsPages;
use Jcowie\MageCasts\Helper\Data;


class Index extends \Magento\Framework\App\Action\Action
{
    /** @var  \Jcowie\MageCasts\Model\CmsPages */
    private $cmsPages;

    /** @var \Jcowie\MageCasts\Helper\Data  */
    private $helper;

    public function __construct(Context $context, CmsPages $cmsPages, Data $helper)
    {
        $this->cmsPages = $cmsPages;
        $this->helper = $helper;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->helper->welcomeHelper();

        $pages = $this->cmsPages->getAllPages();

        $this->getResponse()->setHeader('content-type', 'text/plain');
        $this->getResponse()->appendBody('Hello CMS');
    }
}
