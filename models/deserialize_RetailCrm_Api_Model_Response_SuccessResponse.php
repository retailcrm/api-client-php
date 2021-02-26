<?php

function deserialize_RetailCrm_Api_Model_Response_SuccessResponse(array $jsonData): RetailCrm\Api\Model\Response\SuccessResponse
{
    
$model = new RetailCrm\Api\Model\Response\SuccessResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}



    return $model;
}
