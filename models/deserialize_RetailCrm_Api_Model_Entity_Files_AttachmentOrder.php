<?php

function deserialize_RetailCrm_Api_Model_Entity_Files_AttachmentOrder(array $jsonData): RetailCrm\Api\Model\Entity\Files\AttachmentOrder
{
    
$model = new RetailCrm\Api\Model\Entity\Files\AttachmentOrder();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['number'])) {
    $model->number = $jsonData['number'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}



    return $model;
}
