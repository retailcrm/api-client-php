<?php
namespace RetailCrm;

use RetailCrm\Http\Client;
use RetailCrm\Response\ApiResponse;

/**
 * retailCRM API client class
 */
class ApiClient
{

    const VERSION = 'v3';

    protected $client;

    /**
     * Site code
     */
    protected $siteCode;

    /**
     * Client creating
     *
     * @param string $url
     * @param string $apiKey
     * @param string $siteCode
     *
     * @return mixed
     */
    public function __construct($url, $apiKey, $site = null)
    {
        if ('/' != substr($url, strlen($url) - 1, 1)) {
            $url .= '/';
        }

        $url = $url . 'api/' . self::VERSION;

        $this->client = new Client($url, array(
            'apiKey' => $apiKey
        ));
        $this->siteCode = $site;
    }

    /**
     * Returns filtered orders list
     *
     * @param array $filter (default: array())
     * @param int $page (default: null)
     * @param int $limit (default: null)
     *
     * @return ApiResponse
     */
    public function ordersList(array $filter = array(), $page = null, $limit = null)
    {
        $parameters = array();

        if (sizeof($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        return $this->client->makeRequest('/orders', Client::METHOD_GET, $parameters);
    }

    /**
     * Create a order
     *
     * @param array $order
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function ordersCreate(array $order, $site = null)
    {
        if (! sizeof($order)) {
            throw new \InvalidArgumentException('Parameter `order` must contains a data');
        }

        return $this->client->makeRequest("/orders/create", Client::METHOD_POST, $this->fillSite($site, array(
            'order' => json_encode($order)
        )));
    }

    /**
     * Save order IDs' (id and externalId) association in the CRM
     *
     * @param array $ids
     *
     * @return ApiResponse
     */
    public function ordersFixExternalIds(array $ids)
    {
        if (! sizeof($ids)) {
            throw new \InvalidArgumentException('Method parameter must contains at least one IDs pair');
        }

        return $this->client->makeRequest("/orders/fix-external-ids", Client::METHOD_POST, array(
            'orders' => json_encode($ids)
        ));
    }

    /**
     * Returns a orders history
     *
     * @param \DateTime $startDate (default: null)
     * @param \DateTime $endDate (default: null)
     * @param int $limit (default: 100)
     * @param int $offset (default: 0)
     * @param bool $skipMyChanges (default: true)
     *
     * @return ApiResponse
     */
    public function ordersHistory(\DateTime $startDate = null, \DateTime $endDate = null, $limit = 100, $offset = 0, $skipMyChanges = true)
    {
        $parameters = array();

        if ($startDate) {
            $parameters['startDate'] = $startDate->format('Y-m-d H:i:s');
        }
        if ($endDate) {
            $parameters['endDate'] = $endDate->format('Y-m-d H:i:s');
        }
        if ($limit) {
            $parameters['limit'] = (int) $limit;
        }
        if ($offset) {
            $parameters['offset'] = (int) $offset;
        }
        if ($skipMyChanges) {
            $parameters['skipMyChanges'] = (bool) $skipMyChanges;
        }

        return $this->client->makeRequest('/orders/history', Client::METHOD_GET, $parameters);
    }

    /**
     * Returns statuses of the orders
     *
     * @param array $ids (default: array())
     * @param array $externalIds (default: array())
     *
     * @return ApiResponse
     */
    public function ordersStatuses(array $ids = array(), array $externalIds = array())
    {
        $parameters = array();

        if (sizeof($ids)) {
            $parameters['ids'] = $ids;
        }
        if (sizeof($externalIds)) {
            $parameters['externalIds'] = $externalIds;
        }

        return $this->client->makeRequest('/orders/statuses', Client::METHOD_GET, $parameters);
    }

    /**
     * Upload array of the orders
     *
     * @param array $orders
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function ordersUpload(array $orders, $site = null)
    {
        if (! sizeof($orders)) {
            throw new \InvalidArgumentException('Parameter `orders` must contains array of the orders');
        }

        return $this->client->makeRequest("/orders/upload", Client::METHOD_POST, $this->fillSite($site, array(
            'orders' => json_encode($orders)
        )));
    }

    /**
     * Get order by id or externalId
     *
     * @param string $id
     * @param string $by (default: 'externalId')
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function ordersGet($id, $by = 'externalId', $site = null)
    {
        $this->checkIdParameter($by);

        return $this->client->makeRequest("/orders/$id", Client::METHOD_GET, $this->fillSite($site, array(
            'by' => $by
        )));
    }

    /**
     * Edit a order
     *
     * @param array $order
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function ordersEdit(array $order, $by = 'externalId', $site = null)
    {
        if (! sizeof($order)) {
            throw new \InvalidArgumentException('Parameter `order` must contains a data');
        }

        $this->checkIdParameter($by);

        if (! isset($order[$by])) {
            throw new \InvalidArgumentException(sprintf('Order array must contain the "%s" parameter.', $by));
        }

        return $this->client->makeRequest("/orders/" . $order[$by] . "/edit", Client::METHOD_POST, $this->fillSite($site, array(
            'order' => json_encode($order),
            'by' => $by
        )));
    }

    /**
     * Returns filtered customers list
     *
     * @param array $filter (default: array())
     * @param int $page (default: null)
     * @param int $limit (default: null)
     *
     * @return ApiResponse
     */
    public function customersList(array $filter = array(), $page = null, $limit = null)
    {
        $parameters = array();

        if (sizeof($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        return $this->client->makeRequest('/customers', Client::METHOD_GET, $parameters);
    }

    /**
     * Create a customer
     *
     * @param array $customer
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function customersCreate(array $customer, $site = null)
    {
        if (! sizeof($customer)) {
            throw new \InvalidArgumentException('Parameter `customer` must contains a data');
        }

        return $this->client->makeRequest("/customers/create", Client::METHOD_POST, $this->fillSite($site, array(
            'customer' => json_encode($customer)
        )));
    }

    /**
     * Save customer IDs' (id and externalId) association in the CRM
     *
     * @param array $ids
     *
     * @return ApiResponse
     */
    public function customersFixExternalIds(array $ids)
    {
        if (! sizeof($ids)) {
            throw new \InvalidArgumentException('Method parameter must contains at least one IDs pair');
        }

        return $this->client->makeRequest("/customers/fix-external-ids", Client::METHOD_POST, array(
            'customers' => json_encode($ids)
        ));
    }

    /**
     * Upload array of the customers
     *
     * @param array $customers
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function customersUpload(array $customers, $site = null)
    {
        if (! sizeof($customers)) {
            throw new \InvalidArgumentException('Parameter `customers` must contains array of the customers');
        }

        return $this->client->makeRequest("/customers/upload", Client::METHOD_POST, $this->fillSite($site, array(
            'customers' => json_encode($customers)
        )));
    }

    /**
     * Get customer by id or externalId
     *
     * @param string $id
     * @param string $by (default: 'externalId')
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function customersGet($id, $by = 'externalId', $site = null)
    {
        $this->checkIdParameter($by);

        return $this->client->makeRequest("/customers/$id", Client::METHOD_GET, $this->fillSite($site, array(
            'by' => $by
        )));
    }

    /**
     * Edit a customer
     *
     * @param array $customer
     * @param string $by (default: 'externalId')
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function customersEdit(array $customer, $by = 'externalId', $site = null)
    {
        if (! sizeof($customer)) {
            throw new \InvalidArgumentException('Parameter `customer` must contains a data');
        }

        $this->checkIdParameter($by);

        if (! isset($customer[$by])) {
            throw new \InvalidArgumentException(sprintf('Customer array must contain the "%s" parameter.', $by));
        }

        return $this->client->makeRequest("/customers/" . $customer[$by] . "/edit", Client::METHOD_POST, $this->fillSite($site, array(
            'customer' => json_encode($customer),
            'by' => $by
        )));
    }

    /**
     * Get orders assembly list
     *
     * @param array $filter (default: array())
     * @param int $page (default: null)
     * @param int $limit (default: null)
     *
     * @return ApiResponse
     */
    public function ordersPacksList(array $filter = array(), $page = null, $limit = null)
    {
        $parameters = array();

        if (sizeof($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        return $this->client->makeRequest('/orders/packs', Client::METHOD_GET, $parameters);
    }

    /**
     * Create orders assembly
     *
     * @param array $pack
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function ordersPacksCreate(array $pack, $site = null)
    {
        if (! sizeof($pack)) {
            throw new \InvalidArgumentException('Parameter `pack` must contains a data');
        }

        return $this->client->makeRequest("/orders/packs/create", Client::METHOD_POST, $this->fillSite($site, array(
            'pack' => json_encode($pack)
        )));
    }

    /**
     * Get orders assembly history
     *
     * @param array $filter (default: array())
     * @param int $page (default: null)
     * @param int $limit (default: null)
     *
     * @return ApiResponse
     */
    public function ordersPacksHistory(array $filter = array(), $page = null, $limit = null)
    {
        $parameters = array();

        if (sizeof($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        return $this->client->makeRequest('/orders/packs/history', Client::METHOD_GET, $parameters);
    }

    /**
     * Get orders assembly by id
     *
     * @param string $id
     *
     * @return ApiResponse
     */
    public function ordersPacksGet($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException('Parameter `id` must be set');
        }

        return $this->client->makeRequest("/orders/packs/$id", Client::METHOD_GET);
    }

    /**
     * Delete orders assembly by id
     *
     * @param string $id
     *
     * @return ApiResponse
     */
    public function ordersPacksDelete($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException('Parameter `id` must be set');
        }

        return $this->client->makeRequest("/orders/packs/$id/delete", Client::METHOD_POST);
    }

    /**
     * Edit orders assembly
     *
     * @param array $pack
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function ordersPacksEdit(array $pack, $site = null)
    {
        if (! sizeof($pack) || empty($pack['id'])) {
            throw new \InvalidArgumentException('Parameter `pack` must contains a data & pack `id` must be set');
        }

        $id = $pack['id'];

        return $this->client->makeRequest("/orders/packs/$id/edit", Client::METHOD_POST, $this->fillSite($site, array(
            'pack' => json_encode($pack)
        )));
    }

    /**
     * Get purchace prices & stock balance
     *
     * @param array $filter (default: array())
     * @param int $page (default: null)
     * @param int $limit (default: null)
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function storeInventories(array $filter = array(), $page = null, $limit = null, $site = null)
    {
        $parameters = array();

        if (sizeof($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        return $this->client->makeRequest('/store/inventories', Client::METHOD_GET, $this->fillSite($site, $parameters));
    }

    /**
     * Upload store inventories
     *
     * @param array $offers
     * @param string $site (default: null)
     *
     * @return ApiResponse
     */
    public function storeInventoriesUpload(array $offers, $site = null)
    {
        if (! sizeof($offers)) {
            throw new \InvalidArgumentException('Parameter `offers` must contains array of the offers');
        }

        return $this->client->makeRequest("/store/inventories/upload", Client::METHOD_POST, $this->fillSite($site, array(
            'offers' => json_encode($offers)
        )));
    }

    /**
     * Returns available county list
     *
     * @return ApiResponse
     */
    public function countriesList()
    {
        return $this->client->makeRequest('/reference/countries', Client::METHOD_GET);
    }

    /**
     * Returns deliveryServices list
     *
     * @return ApiResponse
     */
    public function deliveryServicesList()
    {
        return $this->client->makeRequest('/reference/delivery-services', Client::METHOD_GET);
    }

    /**
     * Edit deliveryService
     *
     * @param array $data delivery service data
     *
     * @return ApiResponse
     */
    public function deliveryServicesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/delivery-services/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'deliveryService' => json_encode($data)
        ));
    }

    /**
     * Returns deliveryTypes list
     *
     * @return ApiResponse
     */
    public function deliveryTypesList()
    {
        return $this->client->makeRequest('/reference/delivery-types', Client::METHOD_GET);
    }

    /**
     * Edit deliveryType
     *
     * @param array $data delivery type data
     *
     * @return ApiResponse
     */
    public function deliveryTypesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/delivery-types/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'deliveryType' => json_encode($data)
        ));
    }

    /**
     * Returns orderMethods list
     *
     * @return ApiResponse
     */
    public function orderMethodsList()
    {
        return $this->client->makeRequest('/reference/order-methods', Client::METHOD_GET);
    }

    /**
     * Edit orderMethod
     *
     * @param array $data order method data
     *
     * @return ApiResponse
     */
    public function orderMethodsEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/order-methods/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'orderMethod' => json_encode($data)
        ));
    }

    /**
     * Returns orderTypes list
     *
     * @return ApiResponse
     */
    public function orderTypesList()
    {
        return $this->client->makeRequest('/reference/order-types', Client::METHOD_GET);
    }

    /**
     * Edit orderType
     *
     * @param array $data order type data
     *
     * @return ApiResponse
     */
    public function orderTypesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/order-types/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'orderType' => json_encode($data)
        ));
    }

    /**
     * Returns paymentStatuses list
     *
     * @return ApiResponse
     */
    public function paymentStatusesList()
    {
        return $this->client->makeRequest('/reference/payment-statuses', Client::METHOD_GET);
    }

    /**
     * Edit paymentStatus
     *
     * @param array $data payment status data
     *
     * @return ApiResponse
     */
    public function paymentStatusesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/payment-statuses/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'paymentStatus' => json_encode($data)
        ));
    }

    /**
     * Returns paymentTypes list
     *
     * @return ApiResponse
     */
    public function paymentTypesList()
    {
        return $this->client->makeRequest('/reference/payment-types', Client::METHOD_GET);
    }

    /**
     * Edit paymentType
     *
     * @param array $data payment type data
     *
     * @return ApiResponse
     */
    public function paymentTypesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/payment-types/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'paymentType' => json_encode($data)
        ));
    }

    /**
     * Returns productStatuses list
     *
     * @return ApiResponse
     */
    public function productStatusesList()
    {
        return $this->client->makeRequest('/reference/product-statuses', Client::METHOD_GET);
    }

    /**
     * Edit productStatus
     *
     * @param array $data product status data
     *
     * @return ApiResponse
     */
    public function productStatusesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/product-statuses/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'productStatus' => json_encode($data)
        ));
    }

    /**
     * Returns sites list
     *
     * @return ApiResponse
     */
    public function sitesList()
    {
        return $this->client->makeRequest('/reference/sites', Client::METHOD_GET);
    }

    /**
     * Edit site
     *
     * @param array $data site data
     *
     * @return ApiResponse
     */
    public function sitesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/sites/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'site' => json_encode($data)
        ));
    }

    /**
     * Returns statusGroups list
     *
     * @return ApiResponse
     */
    public function statusGroupsList()
    {
        return $this->client->makeRequest('/reference/status-groups', Client::METHOD_GET);
    }

    /**
     * Returns statuses list
     *
     * @return ApiResponse
     */
    public function statusesList()
    {
        return $this->client->makeRequest('/reference/statuses', Client::METHOD_GET);
    }

    /**
     * Edit order status
     *
     * @param array $data status data
     *
     * @return ApiResponse
     */
    public function statusesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        return $this->client->makeRequest('/reference/statuses/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'status' => json_encode($data)
        ));
    }

    /**
     * Returns stores list
     *
     * @return ApiResponse
     */
    public function storesList()
    {
        return $this->client->makeRequest('/reference/stores', Client::METHOD_GET);
    }

    /**
     * Edit store
     *
     * @param array $data site data
     *
     * @return ApiResponse
     */
    public function storesEdit(array $data)
    {
        if (! isset($data['code'])) {
            throw new \InvalidArgumentException('Data must contain "code" parameter.');
        }

        if (! isset($data['name'])) {
            throw new \InvalidArgumentException('Data must contain "name" parameter.');
        }

        return $this->client->makeRequest('/reference/stores/' . $data['code'] . '/edit', Client::METHOD_POST, array(
            'store' => json_encode($data)
        ));
    }

    /**
     * Update CRM basic statistic
     *
     * @return ApiResponse
     */
    public function statisticUpdate()
    {
        return $this->client->makeRequest('/statistic/update', Client::METHOD_GET);
    }

    /**
     * Call event
     *
     * @param string $phone
     * @param string $type
     * @param string $code
     * @param string $status
     *
     * @return ApiResponse
     */
    public function telephonyCallEvent($phone, $type, $code, $status)
    {
        if (! isset($phone)) {
            throw new \InvalidArgumentException('Phone number must be set');
        }

        $parameters['phone'] = $phone;

        if (! isset($type)) {
            throw new \InvalidArgumentException('Type must be set (in|out|hangup)');
        }

        $parameters['type'] = $type;

        if (! isset($code)) {
            throw new \InvalidArgumentException('Code must be set');
        }

        $parameters['code'] = $code;
        $parameters['hangupStatus'] = $status;

        return $this->client->makeRequest('/telephony/call/event', Client::METHOD_POST, $parameters);
    }

    /**
     * Upload calls
     *
     * @param array $calls
     *
     * @return ApiResponse
     */
    public function telephonyCallsUpload(array $calls)
    {
        if (! sizeof($calls)) {
            throw new \InvalidArgumentException('Parameter `calls` must contains array of the calls');
        }

        return $this->client->makeRequest("/telephony/calls/upload", Client::METHOD_POST, array(
            'calls' => json_encode($calls)
        ));
    }

    /**
     * Get call manager
     *
     * @return ApiResponse
     */
    public function telephonyCallManager($phone, $details)
    {
        if (!isset($phone)) {
            throw new \InvalidArgumentException('Phone number must be set');
        }

        $parameters['phone'] = $phone;
        $parameters['details'] = isset($details) ? $details : 0;

        return $this->client->makeRequest('/telephony/manager', Client::METHOD_GET, $parameters);
    }

    /**
     * Return current site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->siteCode;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return void
     */
    public function setSite($site)
    {
        $this->siteCode = $site;
    }

    /**
     * Check ID parameter
     *
     * @param string $by
     *
     * @return bool
     */
    protected function checkIdParameter($by)
    {
        $allowedForBy = array(
            'externalId',
            'id'
        );
        if (! in_array($by, $allowedForBy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" for parameter "by" is not valid. Allowed values are %s.', $by, implode(', ', $allowedForBy)));
        }

        return true;
    }

    /**
     * Fill params by site value
     *
     * @param string $site
     * @param array $params
     *
     * @return array
     */
    protected function fillSite($site, array $params)
    {
        if ($site) {
            $params['site'] = $site;
        } elseif ($this->siteCode) {
            $params['site'] = $this->siteCode;
        }

        return $params;
    }
}
