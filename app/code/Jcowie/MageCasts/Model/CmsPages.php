<?php

namespace Jcowie\MageCasts\Model;

use Magento\Cms\Api\PageRepositoryInterface;
use Magento\Cms\Api\Data\PageInterface;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\Raw;

class CmsPages
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Magento\Cms\Api\PageRepositoryInterface
     */
    private $pageRepository;

    /**
     * @var \Magento\Cms\Api\Data\PageInterface
     */
    private $page;

    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @var FilterBuilder
     */
    private $filterBuilder;

    public function __construct(\Psr\Log\LoggerInterface $logger,
                                PageRepositoryInterface $pageRepositoryInterface,
                                PageInterface $pageInterface,
                                SearchCriteriaBuilder $searchCriteriaBuilder,
                                FilterBuilder $filterBuilder
    )
    {
        $this->logger = $logger;
        $this->pageRepository = $pageRepositoryInterface;
        $this->page = $pageInterface;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->filterBuilder = $filterBuilder;
    }

    public function getAllPages()
    {
        $searchCriteria = $this->searchCriteriaBuilder->create();
        $searchCriteria->setPageSize(10);

        /** @var \Magento\Cms\Api\Data\PageInterface $pages */
        $pages = $this->pageRepository->getList($searchCriteria);
    }
}
