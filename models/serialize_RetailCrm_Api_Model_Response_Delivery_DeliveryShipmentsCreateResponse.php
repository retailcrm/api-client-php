<?php

function serialize_RetailCrm_Api_Model_Response_Delivery_DeliveryShipmentsCreateResponse(RetailCrm\Api\Model\Response\Delivery\DeliveryShipmentsCreateResponse $model, bool $useStdClass = true)
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
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
