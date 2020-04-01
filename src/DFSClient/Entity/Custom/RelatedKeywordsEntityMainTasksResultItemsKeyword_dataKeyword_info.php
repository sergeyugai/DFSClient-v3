<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\RelatedKeywordsEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches;

class RelatedKeywordsEntityMainTasksResultItemsKeyword_dataKeyword_info 
{    
    /**
    * @var null|string $last_updated_time;
    */
    public $last_updated_time = null;

    /**
    * @var null|double $competition;
    */
    public $competition = null;

    /**
    * @var null|double $cpc;
    */
    public $cpc = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var null|array $categories;
    */
    public $categories = null;

    /**
    * array|RelatedKeywordsEntityMainTasksResultItemsKeyword_dataKeyword_infoMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}