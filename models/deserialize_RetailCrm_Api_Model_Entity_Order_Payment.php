<?php

function deserialize_RetailCrm_Api_Model_Entity_Order_Payment(array $jsonData): RetailCrm\Api\Model\Entity\Order\Payment
{
    
$model = new RetailCrm\Api\Model\Entity\Order\Payment();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['amount'])) {
    $model->amount = (float) $jsonData['amount'];

}
if (isset($jsonData['paidAt'])) {
    $model->paidAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['paidAt']);

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}



    return $model;
}
