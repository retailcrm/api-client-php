<?php

function serialize_RetailCrm_Api_Model_Response_Orders_OrdersCombineResponse(RetailCrm\Api\Model\Response\Orders\OrdersCombineResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->errors) {
    $jsonData["errors"] = [];
foreach (array_keys($model->errors) as $index10) {
    $jsonData["errors"] = $model->errors;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
