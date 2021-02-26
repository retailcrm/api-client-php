<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_LoyaltyCalculation(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\LoyaltyCalculation
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyCalculation();
if (isset($jsonData['privilegeType'])) {
    $model->privilegeType = $jsonData['privilegeType'];

}
if (isset($jsonData['discount'])) {
    $model->discount = (float) $jsonData['discount'];

}
if (isset($jsonData['creditBonuses'])) {
    $model->creditBonuses = (float) $jsonData['creditBonuses'];

}
if (isset($jsonData['maxChargeBonuses'])) {
    $model->maxChargeBonuses = (float) $jsonData['maxChargeBonuses'];

}
if (isset($jsonData['maximum'])) {
    $model->maximum = $jsonData['maximum'];

}



    return $model;
}
