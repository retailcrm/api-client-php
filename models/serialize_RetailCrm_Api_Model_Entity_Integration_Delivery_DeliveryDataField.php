<?php

function serialize_RetailCrm_Api_Model_Entity_Integration_Delivery_DeliveryDataField(RetailCrm\Api\Model\Entity\Integration\Delivery\DeliveryDataField $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->label) {
    $jsonData["label"] = $model->label;
}
if (null !== $model->hint) {
    $jsonData["hint"] = $model->hint;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->multiple) {
    $jsonData["multiple"] = $model->multiple;
}
if (null !== $model->choices) {
    $jsonData["choices"] = $model->choices;
}
if (null !== $model->autocompleteUrl) {
    $jsonData["autocompleteUrl"] = $model->autocompleteUrl;
}
if (null !== $model->visible) {
    $jsonData["visible"] = $model->visible;
}
if (null !== $model->required) {
    $jsonData["required"] = $model->required;
}
if (null !== $model->affectsCost) {
    $jsonData["affectsCost"] = $model->affectsCost;
}
if (null !== $model->editable) {
    $jsonData["editable"] = $model->editable;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
