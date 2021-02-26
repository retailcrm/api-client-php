<?php

function serialize_RetailCrm_Api_Model_Response_Customers_CustomersUploadResponse(RetailCrm\Api\Model\Response\Customers\CustomersUploadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->uploadedCustomers) {
    $jsonData["uploadedCustomers"] = [];
foreach (array_keys($model->uploadedCustomers) as $index21) {
    $jsonData["uploadedCustomers"][$index21] = [];
if (null !== $model->uploadedCustomers[$index21]->id) {
    $jsonData["uploadedCustomers"][$index21]["id"] = $model->uploadedCustomers[$index21]->id;
}
if (null !== $model->uploadedCustomers[$index21]->externalId) {
    $jsonData["uploadedCustomers"][$index21]["externalId"] = $model->uploadedCustomers[$index21]->externalId;
}

if (0 === \count($jsonData["uploadedCustomers"][$index21])) {
    $jsonData["uploadedCustomers"][$index21] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
