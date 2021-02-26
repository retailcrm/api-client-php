<?php

function deserialize_RetailCrm_Api_Model_Entity_Delivery_StatusInfo(array $jsonData): RetailCrm\Api\Model\Entity\Delivery\StatusInfo
{
    
$model = new RetailCrm\Api\Model\Entity\Delivery\StatusInfo();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['updatedAt'])) {
    $model->updatedAt = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $jsonData['updatedAt']);

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}



    return $model;
}
