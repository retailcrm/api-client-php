<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Telephony_SerializedAdditionalCodes(RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedAdditionalCodes $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->userId) {
    $jsonData["userId"] = $model->userId;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
