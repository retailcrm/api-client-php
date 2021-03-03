<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_ErrorResponse(array $jsonData): RetailCrm\Api\Model\Callback\Response\ErrorResponse
{
    
$model = new RetailCrm\Api\Model\Callback\Response\ErrorResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['errors'])) {
    $model->errors = [];
foreach (array_keys($jsonData['errors']) as $index19) {
    $model->errors[$index19] = $jsonData['errors'][$index19];

}

}
if (isset($jsonData['errorMsg'])) {
    $model->errorMsg = $jsonData['errorMsg'];

}



    return $model;
}
