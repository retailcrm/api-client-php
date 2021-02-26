<?php

function deserialize_RetailCrm_Api_Model_Entity_CustomFields_CustomField(array $jsonData): RetailCrm\Api\Model\Entity\CustomFields\CustomField
{
    
$model = new RetailCrm\Api\Model\Entity\CustomFields\CustomField();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['required'])) {
    $model->required = $jsonData['required'];

}
if (isset($jsonData['inFilter'])) {
    $model->inFilter = $jsonData['inFilter'];

}
if (isset($jsonData['inList'])) {
    $model->inList = $jsonData['inList'];

}
if (isset($jsonData['inGroupActions'])) {
    $model->inGroupActions = $jsonData['inGroupActions'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['entity'])) {
    $model->entity = $jsonData['entity'];

}
if (isset($jsonData['default'])) {
    $model->default = $jsonData['default'];

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}
if (isset($jsonData['displayArea'])) {
    $model->displayArea = $jsonData['displayArea'];

}
if (isset($jsonData['viewMode'])) {
    $model->viewMode = $jsonData['viewMode'];

}
if (isset($jsonData['dictionary'])) {
    $model->dictionary = $jsonData['dictionary'];

}



    return $model;
}
