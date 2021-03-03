<?php

function deserialize_RetailCrm_Api_Model_Entity_References_Point(array $jsonData): RetailCrm\Api\Model\Entity\References\Point
{
    
$model = new RetailCrm\Api\Model\Entity\References\Point();
if (isset($jsonData['latitude'])) {
    $model->latitude = (float) $jsonData['latitude'];

}
if (isset($jsonData['longitude'])) {
    $model->longitude = (float) $jsonData['longitude'];

}



    return $model;
}
