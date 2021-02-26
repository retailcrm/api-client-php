<?php

function deserialize_RetailCrm_Api_Model_Entity_Pagination(array $jsonData): RetailCrm\Api\Model\Entity\Pagination
{
    
$model = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['limit'])) {
    $model->limit = $jsonData['limit'];

}
if (isset($jsonData['totalCount'])) {
    $model->totalCount = $jsonData['totalCount'];

}
if (isset($jsonData['currentPage'])) {
    $model->currentPage = $jsonData['currentPage'];

}
if (isset($jsonData['totalPageCount'])) {
    $model->totalPageCount = $jsonData['totalPageCount'];

}



    return $model;
}
