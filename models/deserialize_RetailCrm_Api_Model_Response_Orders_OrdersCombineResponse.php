<?php

function deserialize_RetailCrm_Api_Model_Response_Orders_OrdersCombineResponse(array $jsonData): RetailCrm\Api\Model\Response\Orders\OrdersCombineResponse
{
    
$model = new RetailCrm\Api\Model\Response\Orders\OrdersCombineResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['errors'])) {
    $model->errors = [];
foreach (array_keys($jsonData['errors']) as $index19) {
    $model->errors[$index19] = $jsonData['errors'][$index19];

}

}



    return $model;
}
