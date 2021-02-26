<?php

function deserialize_RetailCrm_Api_Model_Entity_Files_Attachment(array $jsonData): RetailCrm\Api\Model\Entity\Files\Attachment
{
    
$model = new RetailCrm\Api\Model\Entity\Files\Attachment();
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\Files\AttachmentCustomer();
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['site'])) {
    $model->customer->site = $jsonData['customer']['site'];

}


}
if (isset($jsonData['order'])) {
    
$model->order = new RetailCrm\Api\Model\Entity\Files\AttachmentOrder();
if (isset($jsonData['order']['id'])) {
    $model->order->id = $jsonData['order']['id'];

}
if (isset($jsonData['order']['number'])) {
    $model->order->number = $jsonData['order']['number'];

}
if (isset($jsonData['order']['externalId'])) {
    $model->order->externalId = $jsonData['order']['externalId'];

}
if (isset($jsonData['order']['site'])) {
    $model->order->site = $jsonData['order']['site'];

}


}



    return $model;
}
