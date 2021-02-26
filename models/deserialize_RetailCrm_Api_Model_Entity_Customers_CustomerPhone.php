<?php

function deserialize_RetailCrm_Api_Model_Entity_Customers_CustomerPhone(array $jsonData): RetailCrm\Api\Model\Entity\Customers\CustomerPhone
{
    
$model = new RetailCrm\Api\Model\Entity\Customers\CustomerPhone();
if (isset($jsonData['number'])) {
    $model->number = $jsonData['number'];

}



    return $model;
}
