<?php

function deserialize_RetailCrm_Api_Model_Entity_Verification_SmsVerificationConfirm(array $jsonData): RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm
{
    
$model = new RetailCrm\Api\Model\Entity\Verification\SmsVerificationConfirm();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['checkId'])) {
    $model->checkId = $jsonData['checkId'];

}



    return $model;
}
