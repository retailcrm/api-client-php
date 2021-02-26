<?php

function deserialize_RetailCrm_Api_Model_Response_Costs_CostsUploadResponse(array $jsonData): RetailCrm\Api\Model\Response\Costs\CostsUploadResponse
{
    
$model = new RetailCrm\Api\Model\Response\Costs\CostsUploadResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['uploadedCosts'])) {
    $model->uploadedCosts = $jsonData['uploadedCosts'];

}



    return $model;
}
