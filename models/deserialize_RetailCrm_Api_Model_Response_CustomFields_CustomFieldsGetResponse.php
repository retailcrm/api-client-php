<?php

function deserialize_RetailCrm_Api_Model_Response_CustomFields_CustomFieldsGetResponse(array $jsonData): RetailCrm\Api\Model\Response\CustomFields\CustomFieldsGetResponse
{
    
$model = new RetailCrm\Api\Model\Response\CustomFields\CustomFieldsGetResponse();
if (isset($jsonData['success'])) {
    $model->success = $jsonData['success'];

}
if (isset($jsonData['customField'])) {
    
$model->customField = new RetailCrm\Api\Model\Entity\CustomFields\CustomField();
if (isset($jsonData['customField']['name'])) {
    $model->customField->name = $jsonData['customField']['name'];

}
if (isset($jsonData['customField']['code'])) {
    $model->customField->code = $jsonData['customField']['code'];

}
if (isset($jsonData['customField']['required'])) {
    $model->customField->required = $jsonData['customField']['required'];

}
if (isset($jsonData['customField']['inFilter'])) {
    $model->customField->inFilter = $jsonData['customField']['inFilter'];

}
if (isset($jsonData['customField']['inList'])) {
    $model->customField->inList = $jsonData['customField']['inList'];

}
if (isset($jsonData['customField']['inGroupActions'])) {
    $model->customField->inGroupActions = $jsonData['customField']['inGroupActions'];

}
if (isset($jsonData['customField']['type'])) {
    $model->customField->type = $jsonData['customField']['type'];

}
if (isset($jsonData['customField']['entity'])) {
    $model->customField->entity = $jsonData['customField']['entity'];

}
if (isset($jsonData['customField']['default'])) {
    $model->customField->default = $jsonData['customField']['default'];

}
if (isset($jsonData['customField']['ordering'])) {
    $model->customField->ordering = $jsonData['customField']['ordering'];

}
if (isset($jsonData['customField']['displayArea'])) {
    $model->customField->displayArea = $jsonData['customField']['displayArea'];

}
if (isset($jsonData['customField']['viewMode'])) {
    $model->customField->viewMode = $jsonData['customField']['viewMode'];

}
if (isset($jsonData['customField']['dictionary'])) {
    $model->customField->dictionary = $jsonData['customField']['dictionary'];

}


}



    return $model;
}
