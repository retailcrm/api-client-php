<?php

function deserialize_RetailCrm_Api_Model_Response_IdResponse(array $jsonData): RetailCrm\Api\Model\Response\IdResponse
{
    
$model = new RetailCrm\Api\Model\Response\IdResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}



    return $model;
}
