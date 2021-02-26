<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Telephony_SerializedExternalPhones(RetailCrm\Api\Model\Entity\Integration\Telephony\SerializedExternalPhones $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->siteCode) {
    $jsonData["siteCode"] = $model->siteCode;
}
if (null !== $model->externalPhone) {
    $jsonData["externalPhone"] = $model->externalPhone;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
