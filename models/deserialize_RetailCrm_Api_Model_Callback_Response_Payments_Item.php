<?php

function deserialize_RetailCrm_Api_Model_Callback_Response_Payments_Item(array $jsonData): RetailCrm\Api\Model\Callback\Response\Payments\Item
{
    
$model = new RetailCrm\Api\Model\Callback\Response\Payments\Item();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['price'])) {
    $model->price = (float) $jsonData['price'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = (float) $jsonData['quantity'];

}
if (isset($jsonData['measurementUnit'])) {
    $model->measurementUnit = $jsonData['measurementUnit'];

}
if (isset($jsonData['vat'])) {
    $model->vat = $jsonData['vat'];

}
if (isset($jsonData['paymentMethod'])) {
    $model->paymentMethod = $jsonData['paymentMethod'];

}
if (isset($jsonData['paymentObject'])) {
    $model->paymentObject = $jsonData['paymentObject'];

}
if (isset($jsonData['productCode'])) {
    $model->productCode = $jsonData['productCode'];

}



    return $model;
}
