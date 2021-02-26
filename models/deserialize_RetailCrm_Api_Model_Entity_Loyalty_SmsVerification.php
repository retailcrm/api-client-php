<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_SmsVerification(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\SmsVerification
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\SmsVerification();
if (isset($jsonData['createdAt'])) {
    $model->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['createdAt']);

}
if (isset($jsonData['expiredAt'])) {
    $model->expiredAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['expiredAt']);

}
if (isset($jsonData['verifiedAt'])) {
    $model->verifiedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['verifiedAt']);

}
if (isset($jsonData['checkId'])) {
    $model->checkId = $jsonData['checkId'];

}
if (isset($jsonData['actionType'])) {
    $model->actionType = $jsonData['actionType'];

}



    return $model;
}
