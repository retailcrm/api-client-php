<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_Customer(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\Customer
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\Customer();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['personalDiscount'])) {
    $model->personalDiscount = (float) $jsonData['personalDiscount'];

}



    return $model;
}
