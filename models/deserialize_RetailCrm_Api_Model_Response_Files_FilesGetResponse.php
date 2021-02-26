<?php

function deserialize_RetailCrm_Api_Model_Response_Files_FilesGetResponse(array $jsonData): RetailCrm\Api\Model\Response\Files\FilesGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\Files\FilesGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['file'])) {
    
$model->file = new RetailCrm\Api\Model\Entity\Files\File();
if (isset($jsonData['file']['id'])) {
    $model->file->id = $jsonData['file']['id'];

}
if (isset($jsonData['file']['filename'])) {
    $model->file->filename = $jsonData['file']['filename'];

}
if (isset($jsonData['file']['type'])) {
    $model->file->type = $jsonData['file']['type'];

}
if (isset($jsonData['file']['createdAt'])) {
    $model->file->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['file']['createdAt']);

}
if (isset($jsonData['file']['size'])) {
    $model->file->size = $jsonData['file']['size'];

}
if (isset($jsonData['file']['attachment'])) {
    $model->file->attachment = [];
foreach (array_keys($jsonData['file']['attachment']) as $index31) {
    
$model->file->attachment[$index31] = new RetailCrm\Api\Model\Entity\Files\Attachment();
if (isset($jsonData['file']['attachment'][$index31]['customer'])) {
    
$model->file->attachment[$index31]->customer = new RetailCrm\Api\Model\Entity\Files\AttachmentCustomer();
if (isset($jsonData['file']['attachment'][$index31]['customer']['id'])) {
    $model->file->attachment[$index31]->customer->id = $jsonData['file']['attachment'][$index31]['customer']['id'];

}
if (isset($jsonData['file']['attachment'][$index31]['customer']['externalId'])) {
    $model->file->attachment[$index31]->customer->externalId = $jsonData['file']['attachment'][$index31]['customer']['externalId'];

}
if (isset($jsonData['file']['attachment'][$index31]['customer']['site'])) {
    $model->file->attachment[$index31]->customer->site = $jsonData['file']['attachment'][$index31]['customer']['site'];

}


}
if (isset($jsonData['file']['attachment'][$index31]['order'])) {
    
$model->file->attachment[$index31]->order = new RetailCrm\Api\Model\Entity\Files\AttachmentOrder();
if (isset($jsonData['file']['attachment'][$index31]['order']['id'])) {
    $model->file->attachment[$index31]->order->id = $jsonData['file']['attachment'][$index31]['order']['id'];

}
if (isset($jsonData['file']['attachment'][$index31]['order']['number'])) {
    $model->file->attachment[$index31]->order->number = $jsonData['file']['attachment'][$index31]['order']['number'];

}
if (isset($jsonData['file']['attachment'][$index31]['order']['externalId'])) {
    $model->file->attachment[$index31]->order->externalId = $jsonData['file']['attachment'][$index31]['order']['externalId'];

}
if (isset($jsonData['file']['attachment'][$index31]['order']['site'])) {
    $model->file->attachment[$index31]->order->site = $jsonData['file']['attachment'][$index31]['order']['site'];

}


}


}

}


}



    return $model;
}
