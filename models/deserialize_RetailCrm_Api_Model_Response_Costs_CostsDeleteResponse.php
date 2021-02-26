<?php

function deserialize_RetailCrm_Api_Model_Response_Costs_CostsDeleteResponse(array $jsonData): RetailCrm\Api\Model\Response\Costs\CostsDeleteResponse
{
    
$model = new RetailCrm\Api\Model\Response\Costs\CostsDeleteResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['count'])) {
    $model->count = $jsonData['count'];

}
if (isset($jsonData['notRemovedIds'])) {
    $model->notRemovedIds = $jsonData['notRemovedIds'];

}



    return $model;
}
