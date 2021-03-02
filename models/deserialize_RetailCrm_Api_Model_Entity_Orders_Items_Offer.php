<?php

function deserialize_RetailCrm_Api_Model_Entity_Orders_Items_Offer(array $jsonData): RetailCrm\Api\Model\Entity\Orders\Items\Offer
{
    
$model = new RetailCrm\Api\Model\Entity\Orders\Items\Offer();
if (isset($jsonData['displayName'])) {
    $model->displayName = $jsonData['displayName'];

}
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['externalId'])) {
    $model->externalId = $jsonData['externalId'];

}
if (isset($jsonData['xmlId'])) {
    $model->xmlId = $jsonData['xmlId'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['article'])) {
    $model->article = $jsonData['article'];

}
if (isset($jsonData['vatRate'])) {
    $model->vatRate = $jsonData['vatRate'];

}
if (isset($jsonData['unit'])) {
    
$model->unit = new RetailCrm\Api\Model\Entity\Orders\Items\Unit();
if (isset($jsonData['unit']['code'])) {
    $model->unit->code = $jsonData['unit']['code'];

}
if (isset($jsonData['unit']['name'])) {
    $model->unit->name = $jsonData['unit']['name'];

}
if (isset($jsonData['unit']['sym'])) {
    $model->unit->sym = $jsonData['unit']['sym'];

}


}
if (isset($jsonData['barcode'])) {
    $model->barcode = $jsonData['barcode'];

}
if (isset($jsonData['properties'])) {
    $model->properties = [];
foreach (array_keys($jsonData['properties']) as $index23) {
    $model->properties[$index23] = $jsonData['properties'][$index23];

}

}



    return $model;
}
