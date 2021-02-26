<?php

function deserialize_RetailCrm_Api_Model_Entity_Loyalty_SerializedLoyaltyOrder(array $jsonData): RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyaltyOrder
{
    
$model = new RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyaltyOrder();
if (isset($jsonData['bonusesCreditTotal'])) {
    $model->bonusesCreditTotal = (float) $jsonData['bonusesCreditTotal'];

}
if (isset($jsonData['bonusesChargeTotal'])) {
    $model->bonusesChargeTotal = (float) $jsonData['bonusesChargeTotal'];

}
if (isset($jsonData['privilegeType'])) {
    $model->privilegeType = $jsonData['privilegeType'];

}
if (isset($jsonData['totalSumm'])) {
    $model->totalSumm = (float) $jsonData['totalSumm'];

}
if (isset($jsonData['personalDiscountPercent'])) {
    $model->personalDiscountPercent = (float) $jsonData['personalDiscountPercent'];

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
if (isset($jsonData['loyaltyLevel'])) {
    
$model->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['loyaltyLevel']['id'])) {
    $model->loyaltyLevel->id = $jsonData['loyaltyLevel']['id'];

}
if (isset($jsonData['loyaltyLevel']['name'])) {
    $model->loyaltyLevel->name = $jsonData['loyaltyLevel']['name'];

}


}
if (isset($jsonData['loyaltyEvent'])) {
    
$model->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['loyaltyEvent']['id'])) {
    $model->loyaltyEvent->id = $jsonData['loyaltyEvent']['id'];

}


}
if (isset($jsonData['customer'])) {
    
$model->customer = new RetailCrm\Api\Model\Entity\Loyalty\Customer();
if (isset($jsonData['customer']['id'])) {
    $model->customer->id = $jsonData['customer']['id'];

}
if (isset($jsonData['customer']['externalId'])) {
    $model->customer->externalId = $jsonData['customer']['externalId'];

}
if (isset($jsonData['customer']['personalDiscount'])) {
    $model->customer->personalDiscount = (float) $jsonData['customer']['personalDiscount'];

}


}
if (isset($jsonData['delivery'])) {
    
$model->delivery = new RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery();
if (isset($jsonData['delivery']['cost'])) {
    $model->delivery->cost = (float) $jsonData['delivery']['cost'];

}


}
if (isset($jsonData['site'])) {
    $model->site = $jsonData['site'];

}
if (isset($jsonData['items'])) {
    $model->items = [];
foreach (array_keys($jsonData['items']) as $index18) {
    
$model->items[$index18] = new RetailCrm\Api\Model\Entity\Loyalty\OrderProduct();
if (isset($jsonData['items'][$index18]['bonusesChargeTotal'])) {
    $model->items[$index18]->bonusesChargeTotal = (float) $jsonData['items'][$index18]['bonusesChargeTotal'];

}
if (isset($jsonData['items'][$index18]['bonusesCreditTotal'])) {
    $model->items[$index18]->bonusesCreditTotal = (float) $jsonData['items'][$index18]['bonusesCreditTotal'];

}
if (isset($jsonData['items'][$index18]['priceType'])) {
    
$model->items[$index18]->priceType = new RetailCrm\Api\Model\Entity\Loyalty\PriceType();
if (isset($jsonData['items'][$index18]['priceType']['code'])) {
    $model->items[$index18]->priceType->code = $jsonData['items'][$index18]['priceType']['code'];

}


}
if (isset($jsonData['items'][$index18]['initialPrice'])) {
    $model->items[$index18]->initialPrice = (float) $jsonData['items'][$index18]['initialPrice'];

}
if (isset($jsonData['items'][$index18]['discountTotal'])) {
    $model->items[$index18]->discountTotal = (float) $jsonData['items'][$index18]['discountTotal'];

}
if (isset($jsonData['items'][$index18]['prices'])) {
    $model->items[$index18]->prices = [];
foreach (array_keys($jsonData['items'][$index18]['prices']) as $index38) {
    
$model->items[$index18]->prices[$index38] = new RetailCrm\Api\Model\Entity\Loyalty\OrderProductPriceItem();
if (isset($jsonData['items'][$index18]['prices'][$index38]['price'])) {
    $model->items[$index18]->prices[$index38]->price = (float) $jsonData['items'][$index18]['prices'][$index38]['price'];

}
if (isset($jsonData['items'][$index18]['prices'][$index38]['quantity'])) {
    $model->items[$index18]->prices[$index38]->quantity = (float) $jsonData['items'][$index18]['prices'][$index38]['quantity'];

}


}

}
if (isset($jsonData['items'][$index18]['vatRate'])) {
    $model->items[$index18]->vatRate = $jsonData['items'][$index18]['vatRate'];

}
if (isset($jsonData['items'][$index18]['quantity'])) {
    $model->items[$index18]->quantity = (float) $jsonData['items'][$index18]['quantity'];

}


}

}



    return $model;
}
