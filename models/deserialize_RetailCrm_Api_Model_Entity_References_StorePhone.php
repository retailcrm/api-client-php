<?php

function deserialize_RetailCrm_Api_Model_Entity_References_StorePhone(array $jsonData): RetailCrm\Api\Model\Entity\References\StorePhone
{
    
$model = new RetailCrm\Api\Model\Entity\References\StorePhone();
if (isset($jsonData['number'])) {
    $model->number = $jsonData['number'];

}



    return $model;
}
