<?php

function serialize_RetailCrm_Api_Model_Response_Verification_SmsVerificationConfirmResponse(RetailCrm\Api\Model\Response\Verification\SmsVerificationConfirmResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->verification) {
    $jsonData["verification"] = [];
if (null !== $model->verification->createdAt) {
    $jsonData["verification"]["createdAt"] = $model->verification->createdAt->format('Y-m-d H:i:s');;
}
if (null !== $model->verification->expiredAt) {
    $jsonData["verification"]["expiredAt"] = $model->verification->expiredAt->format('Y-m-d H:i:s');;
}
if (null !== $model->verification->verifiedAt) {
    $jsonData["verification"]["verifiedAt"] = $model->verification->verifiedAt->format('Y-m-d H:i:s');;
}
if (null !== $model->verification->checkId) {
    $jsonData["verification"]["checkId"] = $model->verification->checkId;
}
if (null !== $model->verification->actionType) {
    $jsonData["verification"]["actionType"] = $model->verification->actionType;
}

if (0 === \count($jsonData["verification"])) {
    $jsonData["verification"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
