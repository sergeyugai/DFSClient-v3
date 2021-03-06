<?php


namespace DFSClientV3\Models\SERP_API\Reviews;


use DFSClientV3\Models\AbstractModel;

class ReviewsGetResultsByTaskId extends AbstractModel
{
    protected $method = 'GET';
    protected $isSupportedMerge = false;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'reviews/{$se}/task_get/{$taskUID}';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @param string $seName
     * @return $this
     */
    public function setSe(string $seName)
    {
        $this->requestToFunction = str_replace('{$se}', $seName, $this->requestToFunction);
        return $this;
    }

    /**
     * @param string $taskUID
     * @return $this
     */
    public function setTaskId(string $taskUID)
    {
        $this->requestToFunction = str_replace('{$taskUID}', $taskUID, $this->requestToFunction);
        return $this;
    }

    /**
     * @return \DFSClientV3\Entity\Custom\ReviewsGetResultsByTaskIdEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\ReviewsGetResultsByTaskIdEntityMain
    {
        return parent::get();
    }

}