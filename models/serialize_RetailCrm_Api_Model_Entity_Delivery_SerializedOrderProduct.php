<?php

function serialize_RetailCrm_Api_Model_Entity_Delivery_SerializedOrderProduct(RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->initialPrice) {
    $jsonData["initialPrice"] = $model->initialPrice;
}
if (null !== $model->discountManualAmount) {
    $jsonData["discountManualAmount"] = $model->discountManualAmount;
}
if (null !== $model->discountManualPercent) {
    $jsonData["discountManualPercent"] = $model->discountManualPercent;
}
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
