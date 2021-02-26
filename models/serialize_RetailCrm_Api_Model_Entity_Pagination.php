<?php

function serialize_RetailCrm_Api_Model_Entity_Pagination(RetailCrm\Api\Model\Entity\Pagination $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->limit) {
    $jsonData["limit"] = $model->limit;
}
if (null !== $model->totalCount) {
    $jsonData["totalCount"] = $model->totalCount;
}
if (null !== $model->currentPage) {
    $jsonData["currentPage"] = $model->currentPage;
}
if (null !== $model->totalPageCount) {
    $jsonData["totalPageCount"] = $model->totalPageCount;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
