<?php

function deserialize_RetailCrm_Api_Model_Entity_Files_File(array $jsonData): RetailCrm\Api\Model\Entity\Files\File
{
    
$model = new RetailCrm\Api\Model\Entity\Files\File();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['filename'])) {
    $model->filename = $jsonData['filename'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['size'])) {
    $model->size = $jsonData['size'];

}
if (isset($jsonData['attachment'])) {
    $model->attachment = [];
foreach (array_keys($jsonData['attachment']) as $index23) {
    
$model->attachment[$index23] = new RetailCrm\Api\Model\Entity\Files\Attachment();
if (isset($jsonData['attachment'][$index23]['customer'])) {
    
$model->attachment[$index23]->customer = new RetailCrm\Api\Model\Entity\Files\AttachmentCustomer();
if (isset($jsonData['attachment'][$index23]['customer']['id'])) {
    $model->attachment[$index23]->customer->id = $jsonData['attachment'][$index23]['customer']['id'];

}
if (isset($jsonData['attachment'][$index23]['customer']['externalId'])) {
    $model->attachment[$index23]->customer->externalId = $jsonData['attachment'][$index23]['customer']['externalId'];

}
if (isset($jsonData['attachment'][$index23]['customer']['site'])) {
    $model->attachment[$index23]->customer->site = $jsonData['attachment'][$index23]['customer']['site'];

}


}
if (isset($jsonData['attachment'][$index23]['order'])) {
    
$model->attachment[$index23]->order = new RetailCrm\Api\Model\Entity\Files\AttachmentOrder();
if (isset($jsonData['attachment'][$index23]['order']['id'])) {
    $model->attachment[$index23]->order->id = $jsonData['attachment'][$index23]['order']['id'];

}
if (isset($jsonData['attachment'][$index23]['order']['number'])) {
    $model->attachment[$index23]->order->number = $jsonData['attachment'][$index23]['order']['number'];

}
if (isset($jsonData['attachment'][$index23]['order']['externalId'])) {
    $model->attachment[$index23]->order->externalId = $jsonData['attachment'][$index23]['order']['externalId'];

}
if (isset($jsonData['attachment'][$index23]['order']['site'])) {
    $model->attachment[$index23]->order->site = $jsonData['attachment'][$index23]['order']['site'];

}


}


}

}



    return $model;
}
