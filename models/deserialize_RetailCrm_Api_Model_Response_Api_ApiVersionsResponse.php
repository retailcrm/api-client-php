<?php

function deserialize_RetailCrm_Api_Model_Response_Api_ApiVersionsResponse(array $jsonData): RetailCrm\Api\Model\Response\Api\ApiVersionsResponse
{
    
$model = new RetailCrm\Api\Model\Response\Api\ApiVersionsResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['versions'])) {
    $model->versions = $jsonData['versions'];

}



    return $model;
}
