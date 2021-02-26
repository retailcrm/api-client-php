<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_AbstractLoyaltyEvent(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}



    return $model;
}
