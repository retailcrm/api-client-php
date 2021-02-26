<?php

function serialize_RetailCrm_Api_Model_Response_Customers_CustomersEditResponse(RetailCrm\Api\Model\Response\Customers\CustomersEditResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->state) {
    $jsonData["state"] = $model->state;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
