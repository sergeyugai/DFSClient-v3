<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\KeywordsResearch;


use DFSClientV3\Models\AbstractModel;
use DFSClientV3\Models\KeywordsDataApi\Keywords_For_Keywords\KeywordsForKeywordLive;

class KeywordSuggestions extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'dataforseo_labs/keyword_suggestions/live';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\KeywordSuggestionsEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\KeywordSuggestionsEntityMain
    {
        return parent::get();
    }

    /**
     * @param string $keyword
     * @return $this
     */
    public function setKeyword(string $keyword)
    {
        $this->payload['keyword'] = $keyword;

        return $this;
    }

    /**
     * @param string $locationName
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;
        return $this;
    }

    /**
     * @param string $languageName
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;
        return $this;
    }

    /**
     * @param string $langCode
     * @return $this
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

        return $this;
    }

    /**
     * @param array $filters
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->payload['filters'] = $filters;

        return $this;
    }

    /**
     * @param array $orderBy
     * @return $this
     */
    public function setOrderBy(array $orderBy)
    {
        $this->payload['order_by'] = $orderBy;

        return $this;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit)
    {
        $this->payload['limit'] = $limit;

        return $this;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset(int $offset)
    {
        $this->payload['offset'] = $offset;

        return $this;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;
        return $this;
    }

    /**
     * @param array $modelPool
     * @return array
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}