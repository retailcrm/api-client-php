<?php

function deserialize_RetailCrm_Api_Model_Response_Customers_CustomersUploadResponse(array $jsonData): RetailCrm\Api\Model\Response\Customers\CustomersUploadResponse
{
    
$model = new RetailCrm\Api\Model\Response\Customers\CustomersUploadResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['uploadedCustomers'])) {
    $model->uploadedCustomers = [];
foreach (array_keys($jsonData['uploadedCustomers']) as $index30) {
    
$model->uploadedCustomers[$index30] = new RetailCrm\Api\Model\Entity\FixExternalRow();
if (isset($jsonData['uploadedCustomers'][$index30]['id'])) {
    $model->uploadedCustomers[$index30]->id = $jsonData['uploadedCustomers'][$index30]['id'];

}
if (isset($jsonData['uploadedCustomers'][$index30]['externalId'])) {
    $model->uploadedCustomers[$index30]->externalId = $jsonData['uploadedCustomers'][$index30]['externalId'];

}


}

}



    return $model;
}
