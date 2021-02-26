<?php

function deserialize_RetailCrm_Api_Model_Response_Loyalty_LoyaltyCalculateResponse(array $jsonData): RetailCrm\Api\Model\Response\Loyalty\LoyaltyCalculateResponse
{
    
$model = new RetailCrm\Api\Model\Response\Loyalty\LoyaltyCalculateResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['order'])) {
    
$model->order = new RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyaltyOrder();
if (isset($jsonData['order']['bonusesCreditTotal'])) {
    $model->order->bonusesCreditTotal = (float) $jsonData['order']['bonusesCreditTotal'];

}
if (isset($jsonData['order']['bonusesChargeTotal'])) {
    $model->order->bonusesChargeTotal = (float) $jsonData['order']['bonusesChargeTotal'];

}
if (isset($jsonData['order']['privilegeType'])) {
    $model->order->privilegeType = $jsonData['order']['privilegeType'];

}
if (isset($jsonData['order']['totalSumm'])) {
    $model->order->totalSumm = (float) $jsonData['order']['totalSumm'];

}
if (isset($jsonData['order']['personalDiscountPercent'])) {
    $model->order->personalDiscountPercent = (float) $jsonData['order']['personalDiscountPercent'];

}
if (isset($jsonData['order']['loyaltyAccount'])) {
    
$model->order->loyaltyAccount = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyAccount();
if (isset($jsonData['order']['loyaltyAccount']['active'])) {
    $model->order->loyaltyAccount->active = $jsonData['order']['loyaltyAccount']['active'];

}
if (isset($jsonData['order']['loyaltyAccount']['id'])) {
    $model->order->loyaltyAccount->id = $jsonData['order']['loyaltyAccount']['id'];

}
if (isset($jsonData['order']['loyaltyAccount']['phoneNumber'])) {
    $model->order->loyaltyAccount->phoneNumber = $jsonData['order']['loyaltyAccount']['phoneNumber'];

}
if (isset($jsonData['order']['loyaltyAccount']['cardNumber'])) {
    $model->order->loyaltyAccount->cardNumber = $jsonData['order']['loyaltyAccount']['cardNumber'];

}
if (isset($jsonData['order']['loyaltyAccount']['amount'])) {
    $model->order->loyaltyAccount->amount = (float) $jsonData['order']['loyaltyAccount']['amount'];

}
if (isset($jsonData['order']['loyaltyAccount']['createdAt'])) {
    $model->order->loyaltyAccount->createdAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['loyaltyAccount']['createdAt']);

}
if (isset($jsonData['order']['loyaltyAccount']['activatedAt'])) {
    $model->order->loyaltyAccount->activatedAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['loyaltyAccount']['activatedAt']);

}
if (isset($jsonData['order']['loyaltyAccount']['confirmedPhoneAt'])) {
    $model->order->loyaltyAccount->confirmedPhoneAt = \DateTime::createFromFormat('Y-m-d H:i:s', $jsonData['order']['loyaltyAccount']['confirmedPhoneAt']);

}
if (isset($jsonData['order']['loyaltyAccount']['lastCheckId'])) {
    $model->order->loyaltyAccount->lastCheckId = $jsonData['order']['loyaltyAccount']['lastCheckId'];

}
if (isset($jsonData['order']['loyaltyAccount']['customFields'])) {
    $model->order->loyaltyAccount->customFields = [];
foreach (array_keys($jsonData['order']['loyaltyAccount']['customFields']) as $index52) {
    $model->order->loyaltyAccount->customFields[$index52] = $jsonData['order']['loyaltyAccount']['customFields'][$index52];

}

}
if (isset($jsonData['order']['loyaltyAccount']['customer'])) {
    
$model->order->loyaltyAccount->customer = new RetailCrm\Api\Model\Entity\CustomersCorporate\SerializedEntityCustomer();
if (isset($jsonData['order']['loyaltyAccount']['customer']['site'])) {
    $model->order->loyaltyAccount->customer->site = $jsonData['order']['loyaltyAccount']['customer']['site'];

}
if (isset($jsonData['order']['loyaltyAccount']['customer']['id'])) {
    $model->order->loyaltyAccount->customer->id = $jsonData['order']['loyaltyAccount']['customer']['id'];

}
if (isset($jsonData['order']['loyaltyAccount']['customer']['externalId'])) {
    $model->order->loyaltyAccount->customer->externalId = $jsonData['order']['loyaltyAccount']['customer']['externalId'];

}
if (isset($jsonData['order']['loyaltyAccount']['customer']['type'])) {
    $model->order->loyaltyAccount->customer->type = $jsonData['order']['loyaltyAccount']['customer']['type'];

}


}


}
if (isset($jsonData['order']['loyaltyLevel'])) {
    
$model->order->loyaltyLevel = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyLevel();
if (isset($jsonData['order']['loyaltyLevel']['id'])) {
    $model->order->loyaltyLevel->id = $jsonData['order']['loyaltyLevel']['id'];

}
if (isset($jsonData['order']['loyaltyLevel']['name'])) {
    $model->order->loyaltyLevel->name = $jsonData['order']['loyaltyLevel']['name'];

}


}
if (isset($jsonData['order']['loyaltyEvent'])) {
    
$model->order->loyaltyEvent = new RetailCrm\Api\Model\Entity\Loyalty\AbstractLoyaltyEvent();
if (isset($jsonData['order']['loyaltyEvent']['id'])) {
    $model->order->loyaltyEvent->id = $jsonData['order']['loyaltyEvent']['id'];

}


}
if (isset($jsonData['order']['customer'])) {
    
$model->order->customer = new RetailCrm\Api\Model\Entity\Loyalty\Customer();
if (isset($jsonData['order']['customer']['id'])) {
    $model->order->customer->id = $jsonData['order']['customer']['id'];

}
if (isset($jsonData['order']['customer']['externalId'])) {
    $model->order->customer->externalId = $jsonData['order']['customer']['externalId'];

}
if (isset($jsonData['order']['customer']['personalDiscount'])) {
    $model->order->customer->personalDiscount = (float) $jsonData['order']['customer']['personalDiscount'];

}


}
if (isset($jsonData['order']['delivery'])) {
    
$model->order->delivery = new RetailCrm\Api\Model\Entity\Loyalty\SerializedOrderDelivery();
if (isset($jsonData['order']['delivery']['cost'])) {
    $model->order->delivery->cost = (float) $jsonData['order']['delivery']['cost'];

}


}
if (isset($jsonData['order']['site'])) {
    $model->order->site = $jsonData['order']['site'];

}
if (isset($jsonData['order']['items'])) {
    $model->order->items = [];
foreach (array_keys($jsonData['order']['items']) as $index27) {
    
$model->order->items[$index27] = new RetailCrm\Api\Model\Entity\Loyalty\OrderProduct();
if (isset($jsonData['order']['items'][$index27]['bonusesChargeTotal'])) {
    $model->order->items[$index27]->bonusesChargeTotal = (float) $jsonData['order']['items'][$index27]['bonusesChargeTotal'];

}
if (isset($jsonData['order']['items'][$index27]['bonusesCreditTotal'])) {
    $model->order->items[$index27]->bonusesCreditTotal = (float) $jsonData['order']['items'][$index27]['bonusesCreditTotal'];

}
if (isset($jsonData['order']['items'][$index27]['priceType'])) {
    
$model->order->items[$index27]->priceType = new RetailCrm\Api\Model\Entity\Loyalty\PriceType();
if (isset($jsonData['order']['items'][$index27]['priceType']['code'])) {
    $model->order->items[$index27]->priceType->code = $jsonData['order']['items'][$index27]['priceType']['code'];

}


}
if (isset($jsonData['order']['items'][$index27]['initialPrice'])) {
    $model->order->items[$index27]->initialPrice = (float) $jsonData['order']['items'][$index27]['initialPrice'];

}
if (isset($jsonData['order']['items'][$index27]['discountTotal'])) {
    $model->order->items[$index27]->discountTotal = (float) $jsonData['order']['items'][$index27]['discountTotal'];

}
if (isset($jsonData['order']['items'][$index27]['prices'])) {
    $model->order->items[$index27]->prices = [];
foreach (array_keys($jsonData['order']['items'][$index27]['prices']) as $index47) {
    
$model->order->items[$index27]->prices[$index47] = new RetailCrm\Api\Model\Entity\Loyalty\OrderProductPriceItem();
if (isset($jsonData['order']['items'][$index27]['prices'][$index47]['price'])) {
    $model->order->items[$index27]->prices[$index47]->price = (float) $jsonData['order']['items'][$index27]['prices'][$index47]['price'];

}
if (isset($jsonData['order']['items'][$index27]['prices'][$index47]['quantity'])) {
    $model->order->items[$index27]->prices[$index47]->quantity = (float) $jsonData['order']['items'][$index27]['prices'][$index47]['quantity'];

}


}

}
if (isset($jsonData['order']['items'][$index27]['vatRate'])) {
    $model->order->items[$index27]->vatRate = $jsonData['order']['items'][$index27]['vatRate'];

}
if (isset($jsonData['order']['items'][$index27]['quantity'])) {
    $model->order->items[$index27]->quantity = (float) $jsonData['order']['items'][$index27]['quantity'];

}


}

}


}
if (isset($jsonData['calculations'])) {
    $model->calculations = [];
foreach (array_keys($jsonData['calculations']) as $index25) {
    
$model->calculations[$index25] = new RetailCrm\Api\Model\Entity\Loyalty\LoyaltyCalculation();
if (isset($jsonData['calculations'][$index25]['privilegeType'])) {
    $model->calculations[$index25]->privilegeType = $jsonData['calculations'][$index25]['privilegeType'];

}
if (isset($jsonData['calculations'][$index25]['discount'])) {
    $model->calculations[$index25]->discount = (float) $jsonData['calculations'][$index25]['discount'];

}
if (isset($jsonData['calculations'][$index25]['creditBonuses'])) {
    $model->calculations[$index25]->creditBonuses = (float) $jsonData['calculations'][$index25]['creditBonuses'];

}
if (isset($jsonData['calculations'][$index25]['maxChargeBonuses'])) {
    $model->calculations[$index25]->maxChargeBonuses = (float) $jsonData['calculations'][$index25]['maxChargeBonuses'];

}
if (isset($jsonData['calculations'][$index25]['maximum'])) {
    $model->calculations[$index25]->maximum = $jsonData['calculations'][$index25]['maximum'];

}


}

}
if (isset($jsonData['loyalty'])) {
    
$model->loyalty = new RetailCrm\Api\Model\Entity\Loyalty\SerializedLoyalty();
if (isset($jsonData['loyalty']['name'])) {
    $model->loyalty->name = $jsonData['loyalty']['name'];

}
if (isset($jsonData['loyalty']['chargeRate'])) {
    $model->loyalty->chargeRate = (float) $jsonData['loyalty']['chargeRate'];

}


}



    return $model;
}
