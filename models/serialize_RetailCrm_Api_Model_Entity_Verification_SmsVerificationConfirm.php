<?php

function serialize_RetailCrm_Api_Model_Entity_Verification_SmsVerificationConfirm(RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->checkId) {
    $jsonData["checkId"] = $model->checkId;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
