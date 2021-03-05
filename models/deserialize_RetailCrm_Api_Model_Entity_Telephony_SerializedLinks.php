<?php

function deserialize_RetailCrm_Api_Model_Entity_Telephony_SerializedLinks(array $jsonData): RetailCrm\Api\Model\Entity\Telephony\SerializedLinks
{
    
$model = new RetailCrm\Api\Model\Entity\Telephony\SerializedLinks();
if (isset($jsonData['newOrderLink'])) {
    $model->newOrderLink = $jsonData['newOrderLink'];

}
if (isset($jsonData['lastOrderLink'])) {
    $model->lastOrderLink = $jsonData['lastOrderLink'];

}
if (isset($jsonData['newCustomerLink'])) {
    $model->newCustomerLink = $jsonData['newCustomerLink'];

}
if (isset($jsonData['customerLink'])) {
    $model->customerLink = $jsonData['customerLink'];

}



    return $model;
}
