<?php

function deserialize_RetailCrm_Api_Model_Entity_Files_AttachmentCustomer(array $jsonData): RetailCrm\Api\Model\Entity\Files\AttachmentCustomer
{
    
$model = new RetailCrm\Api\Model\Entity\Files\AttachmentCustomer();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}



    return $model;
}
