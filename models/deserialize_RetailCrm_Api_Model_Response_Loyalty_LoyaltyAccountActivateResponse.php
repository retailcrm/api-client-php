<?php

function deserialize_RetailCrm_Api_Model_Response_Loyalty_LoyaltyAccountActivateResponse(array $jsonData): RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountActivateResponse
{
    
$model = new RetailCrm\Api\Model\Response\Loyalty\LoyaltyAccountActivateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['loyaltyAccount'])) {
    
$model->loyaltyAccount = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount();
if (isset($jsonData['loyaltyAccount']['active'])) {
    $model->loyaltyAccount->active = $jsonData['loyaltyAccount']['active'];

}
if (isset($jsonData['loyaltyAccount']['id'])) {
    $model->loyaltyAccount->id = $jsonData['loyaltyAccount']['id'];

}
if (isset($jsonData['loyaltyAccount']['phoneNumber'])) {
    $model->loyaltyAccount->phoneNumber = $jsonData['loyaltyAccount']['phoneNumber'];

}
if (isset($jsonData['loyaltyAccount']['cardNumber'])) {
    $model->loyaltyAccount->cardNumber = $jsonData['loyaltyAccount']['cardNumber'];

}
if (isset($jsonData['loyaltyAccount']['amount'])) {
    $model->loyaltyAccount->amount = (float) $jsonData['loyaltyAccount']['amount'];

}
if (isset($jsonData['loyaltyAccount']['createdAt'])) {
    $model->loyaltyAccount->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyaltyAccount']['createdAt']);

}
if (isset($jsonData['loyaltyAccount']['activatedAt'])) {
    $model->loyaltyAccount->activatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyaltyAccount']['activatedAt']);

}
if (isset($jsonData['loyaltyAccount']['confirmedPhoneAt'])) {
    $model->loyaltyAccount->confirmedPhoneAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['loyaltyAccount']['confirmedPhoneAt']);

}
if (isset($jsonData['loyaltyAccount']['lastCheckId'])) {
    $model->loyaltyAccount->lastCheckId = $jsonData['loyaltyAccount']['lastCheckId'];

}
if (isset($jsonData['loyaltyAccount']['customFields'])) {
    $model->loyaltyAccount->customFields = [];
foreach (array_keys($jsonData['loyaltyAccount']['customFields']) as $index43) {
    $model->loyaltyAccount->customFields[$index43] = $jsonData['loyaltyAccount']['customFields'][$index43];

}

}
if (isset($jsonData['loyaltyAccount']['customer'])) {
    
$model->loyaltyAccount->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['loyaltyAccount']['customer']['site'])) {
    $model->loyaltyAccount->customer->site = $jsonData['loyaltyAccount']['customer']['site'];

}
if (isset($jsonData['loyaltyAccount']['customer']['id'])) {
    $model->loyaltyAccount->customer->id = $jsonData['loyaltyAccount']['customer']['id'];

}
if (isset($jsonData['loyaltyAccount']['customer']['externalId'])) {
    $model->loyaltyAccount->customer->externalId = $jsonData['loyaltyAccount']['customer']['externalId'];

}
if (isset($jsonData['loyaltyAccount']['customer']['type'])) {
    $model->loyaltyAccount->customer->type = $jsonData['loyaltyAccount']['customer']['type'];

}


}


}
if (isset($jsonData['verification'])) {
    
$model->verification = new RetailCrm\Api\Model\Entity\Loyalty\SmsVerification();
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
