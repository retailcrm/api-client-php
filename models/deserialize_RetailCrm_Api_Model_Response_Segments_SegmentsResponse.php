<?php

function deserialize_RetailCrm_Api_Model_Response_Segments_SegmentsResponse(array $jsonData): RetailCrm\Api\Model\Response\Segments\SegmentsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Segments\SegmentsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pagination'])) {
    
$model->pagination = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['pagination']['limit'])) {
    $model->pagination->limit = $jsonData['pagination']['limit'];

}
if (isset($jsonData['pagination']['totalCount'])) {
    $model->pagination->totalCount = $jsonData['pagination']['totalCount'];

}
if (isset($jsonData['pagination']['currentPage'])) {
    $model->pagination->currentPage = $jsonData['pagination']['currentPage'];

}
if (isset($jsonData['pagination']['totalPageCount'])) {
    $model->pagination->totalPageCount = $jsonData['pagination']['totalPageCount'];

}


}
if (isset($jsonData['segments'])) {
    $model->segments = [];
foreach (array_keys($jsonData['segments']) as $index21) {
    
$model->segments[$index21] = new RetailCrm\Api\Model\Entity\Customers\Segment();
if (isset($jsonData['segments'][$index21]['id'])) {
    $model->segments[$index21]->id = $jsonData['segments'][$index21]['id'];

}
if (isset($jsonData['segments'][$index21]['code'])) {
    $model->segments[$index21]->code = $jsonData['segments'][$index21]['code'];

}
if (isset($jsonData['segments'][$index21]['name'])) {
    $model->segments[$index21]->name = $jsonData['segments'][$index21]['name'];

}
if (isset($jsonData['segments'][$index21]['createdAt'])) {
    $model->segments[$index21]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['segments'][$index21]['createdAt']);

}
if (isset($jsonData['segments'][$index21]['isDynamic'])) {
    $model->segments[$index21]->isDynamic = $jsonData['segments'][$index21]['isDynamic'];

}
if (isset($jsonData['segments'][$index21]['customersCount'])) {
    $model->segments[$index21]->customersCount = $jsonData['segments'][$index21]['customersCount'];

}
if (isset($jsonData['segments'][$index21]['active'])) {
    $model->segments[$index21]->active = $jsonData['segments'][$index21]['active'];

}


}

}



    return $model;
}
