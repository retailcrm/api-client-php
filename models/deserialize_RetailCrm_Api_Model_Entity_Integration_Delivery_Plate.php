<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Delivery_Plate(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Delivery\Plate
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Delivery\Plate();
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['label'])) {
    $model->label = $jsonData['label'];

}



    return $model;
}
