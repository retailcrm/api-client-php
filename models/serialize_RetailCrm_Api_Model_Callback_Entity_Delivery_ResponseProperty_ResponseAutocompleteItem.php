<?php

function serialize_RetailCrm_Api_Model_Callback_Entity_Delivery_ResponseProperty_ResponseAutocompleteItem(RetailCrm\Api\Model\Callback\Entity\Delivery\ResponseProperty\ResponseAutocompleteItem $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->value) {
    $jsonData["value"] = $model->value;
}
if (null !== $model->label) {
    $jsonData["label"] = $model->label;
}
if (null !== $model->description) {
    $jsonData["description"] = $model->description;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
