<?php

function deserialize_RetailCrm_Api_Model_Response_Customers_CustomersEditResponse(array $jsonData): RetailCrm\Api\Model\Response\Customers\CustomersEditResponse
{
    
$model = new RetailCrm\Api\Model\Response\Customers\CustomersEditResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['state'])) {
    $model->state = $jsonData['state'];

}



    return $model;
}
