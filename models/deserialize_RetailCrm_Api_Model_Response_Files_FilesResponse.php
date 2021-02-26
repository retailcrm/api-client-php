<?php

function deserialize_RetailCrm_Api_Model_Response_Files_FilesResponse(array $jsonData): RetailCrm\Api\Model\Response\Files\FilesResponse
{
    
$model = new RetailCrm\Api\Model\Response\Files\FilesResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['pagination'])) {
    
$model->pagination = new RetailCrm\Api\Model\Entity\Pagination();
if (isset($jsonData['pagination']['limit'])) {
    $model->pagination->limit = $jsonData['pagination']['limit'];

}
if (isset($jsonData['pagination']['totalCount'])) {
    $model->pagination->totalCount = $jsonData['pagination']['totalCount'];

}
if (isset($jsonData['pagination']['currentPage'])) {
    $model->pagination->currentPage = $jsonData['pagination']['currentPage'];

}
if (isset($jsonData['pagination']['totalPageCount'])) {
    $model->pagination->totalPageCount = $jsonData['pagination']['totalPageCount'];

}


}
if (isset($jsonData['files'])) {
    $model->files = [];
foreach (array_keys($jsonData['files']) as $index18) {
    
$model->files[$index18] = new RetailCrm\Api\Model\Entity\Files\File();
if (isset($jsonData['files'][$index18]['id'])) {
    $model->files[$index18]->id = $jsonData['files'][$index18]['id'];

}
if (isset($jsonData['files'][$index18]['filename'])) {
    $model->files[$index18]->filename = $jsonData['files'][$index18]['filename'];

}
if (isset($jsonData['files'][$index18]['type'])) {
    $model->files[$index18]->type = $jsonData['files'][$index18]['type'];

}
if (isset($jsonData['files'][$index18]['createdAt'])) {
    $model->files[$index18]->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['files'][$index18]['createdAt']);

}
if (isset($jsonData['files'][$index18]['size'])) {
    $model->files[$index18]->size = $jsonData['files'][$index18]['size'];

}
if (isset($jsonData['files'][$index18]['attachment'])) {
    $model->files[$index18]->attachment = [];
foreach (array_keys($jsonData['files'][$index18]['attachment']) as $index42) {
    
$model->files[$index18]->attachment[$index42] = new RetailCrm\Api\Model\Entity\Files\Attachment();
if (isset($jsonData['files'][$index18]['attachment'][$index42]['customer'])) {
    
$model->files[$index18]->attachment[$index42]->customer = new RetailCrm\Api\Model\Entity\Files\AttachmentCustomer();
if (isset($jsonData['files'][$index18]['attachment'][$index42]['customer']['id'])) {
    $model->files[$index18]->attachment[$index42]->customer->id = $jsonData['files'][$index18]['attachment'][$index42]['customer']['id'];

}
if (isset($jsonData['files'][$index18]['attachment'][$index42]['customer']['externalId'])) {
    $model->files[$index18]->attachment[$index42]->customer->externalId = $jsonData['files'][$index18]['attachment'][$index42]['customer']['externalId'];

}
if (isset($jsonData['files'][$index18]['attachment'][$index42]['customer']['site'])) {
    $model->files[$index18]->attachment[$index42]->customer->site = $jsonData['files'][$index18]['attachment'][$index42]['customer']['site'];

}


}
if (isset($jsonData['files'][$index18]['attachment'][$index42]['order'])) {
    
$model->files[$index18]->attachment[$index42]->order = new RetailCrm\Api\Model\Entity\Files\AttachmentOrder();
if (isset($jsonData['files'][$index18]['attachment'][$index42]['order']['id'])) {
    $model->files[$index18]->attachment[$index42]->order->id = $jsonData['files'][$index18]['attachment'][$index42]['order']['id'];

}
if (isset($jsonData['files'][$index18]['attachment'][$index42]['order']['number'])) {
    $model->files[$index18]->attachment[$index42]->order->number = $jsonData['files'][$index18]['attachment'][$index42]['order']['number'];

}
if (isset($jsonData['files'][$index18]['attachment'][$index42]['order']['externalId'])) {
    $model->files[$index18]->attachment[$index42]->order->externalId = $jsonData['files'][$index18]['attachment'][$index42]['order']['externalId'];

}
if (isset($jsonData['files'][$index18]['attachment'][$index42]['order']['site'])) {
    $model->files[$index18]->attachment[$index42]->order->site = $jsonData['files'][$index18]['attachment'][$index42]['order']['site'];

}


}


}

}


}

}



    return $model;
}
