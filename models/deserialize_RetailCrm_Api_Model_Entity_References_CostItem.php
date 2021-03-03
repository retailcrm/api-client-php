<?php

function deserialize_RetailCrm_Api_Model_Entity_References_CostItem(array $jsonData): RetailCrm\Api\Model\Entity\References\CostItem
{
    
$model = new RetailCrm\Api\Model\Entity\References\CostItem();
if (isset($jsonData['source'])) {
    
$model->source = new RetailCrm\Api\Model\Entity\Source();
if (isset($jsonData['source']['source'])) {
    $model->source->source = $jsonData['source']['source'];

}
if (isset($jsonData['source']['medium'])) {
    $model->source->medium = $jsonData['source']['medium'];

}
if (isset($jsonData['source']['campaign'])) {
    $model->source->campaign = $jsonData['source']['campaign'];

}
if (isset($jsonData['source']['keyword'])) {
    $model->source->keyword = $jsonData['source']['keyword'];

}
if (isset($jsonData['source']['content'])) {
    $model->source->content = $jsonData['source']['content'];

}


}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['group'])) {
    $model->group = $jsonData['group'];

}
if (isset($jsonData['ordering'])) {
    $model->ordering = $jsonData['ordering'];

}
if (isset($jsonData['active'])) {
    $model->active = $jsonData['active'];

}
if (isset($jsonData['appliesToOrders'])) {
    $model->appliesToOrders = $jsonData['appliesToOrders'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['appliesToUsers'])) {
    $model->appliesToUsers = $jsonData['appliesToUsers'];

}



    return $model;
}
