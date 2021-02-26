<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_LoyaltyLevel(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
