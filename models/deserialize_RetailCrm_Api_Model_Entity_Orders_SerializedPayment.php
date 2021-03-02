<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_SerializedPayment(array $jsonData): RetailCrm\Api\Model\Entity\Orders\SerializedPayment
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\SerializedPayment();
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
if (isset($jsonData['order'])) {
    
$model->order = new RetailCrm\Api\Model\Entity\Delivery\SerializedEntityOrder();
if (isset($jsonData['order']['id'])) {
    $model->order->id = $jsonData['order']['id'];

}
if (isset($jsonData['order']['externalId'])) {
    $model->order->externalId = $jsonData['order']['externalId'];

}
if (isset($jsonData['order']['number'])) {
    $model->order->number = $jsonData['order']['number'];

}


}



    return $model;
}
