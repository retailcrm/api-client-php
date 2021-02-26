<?php

function serialize_RetailCrm_Api_Model_Entity_Loyalty_SmsVerification(RetailCrm\Api\Model\Entity\Loyalty\SmsVerification $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->createdAt) {
    $jsonData["createdAt"] = $model->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->expiredAt) {
    $jsonData["expiredAt"] = $model->expiredAt->format('Y-m-d H:i:s');;
}
if (null !== $model->verifiedAt) {
    $jsonData["verifiedAt"] = $model->verifiedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->checkId) {
    $jsonData["checkId"] = $model->checkId;
}
if (null !== $model->actionType) {
    $jsonData["actionType"] = $model->actionType;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
