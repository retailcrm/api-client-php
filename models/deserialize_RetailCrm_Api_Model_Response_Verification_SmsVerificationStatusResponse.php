<?php

function deserialize_RetailCrm_Api_Model_Response_Verification_SmsVerificationStatusResponse(array $jsonData): RetailCrm\Api\Model\Response\Verification\SmsVerificationStatusResponse
{
    
$model = new RetailCrm\Api\Model\Response\Verification\SmsVerificationStatusResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['verification'])) {
    
$model->verification = new RetailCrm\Api\Model\Entity\Verification\SmsVerification();
if (isset($jsonData['verification']['createdAt'])) {
    $model->verification->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['verification']['createdAt']);

}
if (isset($jsonData['verification']['expiredAt'])) {
    $model->verification->expiredAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['verification']['expiredAt']);

}
if (isset($jsonData['verification']['verifiedAt'])) {
    $model->verification->verifiedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['verification']['verifiedAt']);

}
if (isset($jsonData['verification']['checkId'])) {
    $model->verification->checkId = $jsonData['verification']['checkId'];

}
if (isset($jsonData['verification']['actionType'])) {
    $model->verification->actionType = $jsonData['verification']['actionType'];

}


}



    return $model;
}
