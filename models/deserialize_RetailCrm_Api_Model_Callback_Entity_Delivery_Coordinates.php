<?php

function deserialize_RetailCrm_Api_Model_Callback_Entity_Delivery_Coordinates(array $jsonData): RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates
{
    
$model = new RetailCrm\Api\Model\Callback\Entity\Delivery\Coordinates();
if (isset($jsonData['latitude'])) {
    $model->latitude = (float) $jsonData['latitude'];

}
if (isset($jsonData['longitude'])) {
    $model->longitude = (float) $jsonData['longitude'];

}



    return $model;
}
