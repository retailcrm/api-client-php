<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Delivery_Status(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Delivery\Status
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Delivery\Status();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['isEditable'])) {
    $model->isEditable = $jsonData['isEditable'];

}



    return $model;
}
