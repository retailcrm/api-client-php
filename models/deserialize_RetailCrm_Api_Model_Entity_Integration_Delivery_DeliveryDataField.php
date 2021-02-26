<?php

function deserialize_RetailCrm_Api_Model_Entity_Integration_Delivery_DeliveryDataField(array $jsonData): RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField
{
    
$model = new RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['label'])) {
    $model->label = $jsonData['label'];

}
if (isset($jsonData['hint'])) {
    $model->hint = $jsonData['hint'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['multiple'])) {
    $model->multiple = $jsonData['multiple'];

}
if (isset($jsonData['choices'])) {
    $model->choices = $jsonData['choices'];

}
if (isset($jsonData['autocompleteUrl'])) {
    $model->autocompleteUrl = $jsonData['autocompleteUrl'];

}
if (isset($jsonData['visible'])) {
    $model->visible = $jsonData['visible'];

}
if (isset($jsonData['required'])) {
    $model->required = $jsonData['required'];

}
if (isset($jsonData['affectsCost'])) {
    $model->affectsCost = $jsonData['affectsCost'];

}
if (isset($jsonData['editable'])) {
    $model->editable = $jsonData['editable'];

}



    return $model;
}
