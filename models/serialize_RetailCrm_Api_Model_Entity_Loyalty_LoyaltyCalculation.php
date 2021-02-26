<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_LoyaltyCalculation(RetailCrm\Api\Model\Entity\Loyalty\LoyaltyCalculation $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->privilegeType) {
    $jsonData["privilegeType"] = $model->privilegeType;
}
if (null !== $model->discount) {
    $jsonData["discount"] = $model->discount;
}
if (null !== $model->creditBonuses) {
    $jsonData["creditBonuses"] = $model->creditBonuses;
}
if (null !== $model->maxChargeBonuses) {
    $jsonData["maxChargeBonuses"] = $model->maxChargeBonuses;
}
if (null !== $model->maximum) {
    $jsonData["maximum"] = $model->maximum;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
