<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_SerializedOrderProduct(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\SerializedOrderProduct();
if (isset($jsonData['initialPrice'])) {
    $model->initialPrice = (float) $jsonData['initialPrice'];

}
if (isset($jsonData['discountManualAmount'])) {
    $model->discountManualAmount = (float) $jsonData['discountManualAmount'];

}
if (isset($jsonData['discountManualPercent'])) {
    $model->discountManualPercent = (float) $jsonData['discountManualPercent'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}



    return $model;
}
