<?php

function serialize_RetailCrm_Api_Model_Response_Telephony_CallEventResponse(RetailCrm\Api\Model\Response\Telephony\CallEventResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->success) {
    $jsonData["success"] = $model->success;
}
if (null !== $model->notExistCodes) {
    $jsonData["notExistCodes"] = [];
foreach (array_keys($model->notExistCodes) as $index17) {
    $jsonData["notExistCodes"] = $model->notExistCodes;
}

}
if (null !== $model->notExistUsers) {
    $jsonData["notExistUsers"] = [];
foreach (array_keys($model->notExistUsers) as $index17) {
    $jsonData["notExistUsers"] = $model->notExistUsers;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
