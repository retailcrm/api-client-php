<?php

/**
 * PHP version 5.4
 *
 * CustomersCorporate
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */

namespace RetailCrm\Methods\V5;

/**
 * PHP version 5.4
 *
 * CustomersCorporate class
 *
 * @category RetailCrm
 * @package  RetailCrm
 * @author   RetailCrm <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://help.retailcrm.ru/Developers/ApiVersion5
 */
trait CustomersCorporate
{
    /**
     * Returns filtered corporate customers list
     *
     * @param array $filter (default: array())
     * @param int   $page   (default: null)
     * @param int   $limit  (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateList(array $filter = [], $page = null, $limit = null)
    {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers-corporate',
            "GET",
            $parameters
        );
    }

    /**
     * Create a corporate customer
     *
     * @param array  $customerCorporate corporate customer data
     * @param string $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateCreate(array $customerCorporate, $site = null)
    {
        if (! count($customerCorporate)) {
            throw new \InvalidArgumentException(
                'Parameter `customerCorporate` must contains a data'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers-corporate/create',
            "POST",
            $this->fillSite($site, ['customerCorporate' => json_encode($customerCorporate)])
        );
    }

    /**
     * Save corporate customer IDs' (id and externalId) association in the CRM
     *
     * @param array $ids ids mapping
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateFixExternalIds(array $ids)
    {
        if (! count($ids)) {
            throw new \InvalidArgumentException(
                'Method parameter must contains at least one IDs pair'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers-corporate/fix-external-ids',
            "POST",
            ['customersCorporate' => json_encode($ids)]
        );
    }


    /**
     * Get corporate customers history
     * @param array $filter
     * @param null $page
     * @param null $limit
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateHistory(array $filter = [], $page = null, $limit = null)
    {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers-corporate/history',
            "GET",
            $parameters
        );
    }

    /**
     * Returns filtered corporate customers notes list
     *
     * @param array $filter (default: array())
     * @param int   $page   (default: null)
     * @param int   $limit  (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateNotesList(array $filter = [], $page = null, $limit = null)
    {
        $parameters = [];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers-corporate/notes',
            "GET",
            $parameters
        );
    }

    /**
     * Create corporate customer note
     *
     * @param array $note (default: array())
     * @param string $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateNotesCreate($note, $site = null)
    {
        if (empty($note['customer']['id']) && empty($note['customer']['externalId'])) {
            throw new \InvalidArgumentException(
                'Customer identifier must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers-corporate/notes/create',
            "POST",
            $this->fillSite($site, ['note' => json_encode($note)])
        );
    }

    /**
     * Delete corporate customer note
     *
     * @param integer $id
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateNotesDelete($id)
    {
        if (empty($id)) {
            throw new \InvalidArgumentException(
                'Note id must be set'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/notes/$id/delete",
            "POST"
        );
    }

    /**
     * Upload array of the corporate customers
     *
     * @param array  $customersCorporate array of corporate customers
     * @param string $site               (default: null)
     *
     * @return \RetailCrm\Response\ApiResponse
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @throws \InvalidArgumentException
     */
    public function customersCorporateUpload(array $customersCorporate, $site = null)
    {
        if (!count($customersCorporate)) {
            throw new \InvalidArgumentException(
                'Parameter `customersCorporate` must contains array of the corporate customers'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            '/customers-corporate/upload',
            "POST",
            $this->fillSite($site, ['customersCorporate' => json_encode($customersCorporate)])
        );
    }

    /**
     * Get corporate customer by id or externalId
     *
     * @param string $id   corporate customer identifier
     * @param string $by   (default: 'externalId')
     * @param string $site (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateGet($id, $by = 'externalId', $site = null)
    {
        $this->checkIdParameter($by);

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$id",
            "GET",
            $this->fillSite($site, ['by' => $by])
        );
    }

    /**
     * Get corporate customer addresses by id or externalId
     *
     * @param string $id     corporate customer identifier
     * @param array  $filter (default: array())
     * @param int    $page   (default: null)
     * @param int    $limit  (default: null)
     * @param string $by     (default: 'externalId')
     * @param string $site   (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateAddresses(
        $id,
        array $filter = [],
        $page = null,
        $limit = null,
        $by = 'externalId',
        $site = null
    ) {
        $this->checkIdParameter($by);

        $parameters = ['by' => $by];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$id/addresses",
            "GET",
            $this->fillSite($site, $parameters)
        );
    }

    /**
     * Create corporate customer address
     *
     * @param string $id       corporate customer identifier
     * @param array  $address  (default: array())
     * @param string $by       (default: 'externalId')
     * @param string $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateAddressesCreate($id, array $address = [], $by = 'externalId', $site = null)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$id/addresses/create",
            "POST",
            $this->fillSite($site, ['address' => json_encode($address), 'by' => $by])
        );
    }

    /**
     * Edit corporate customer address
     *
     * @param string $customerId corporate customer identifier
     * @param string $addressId  corporate customer identifier
     * @param array  $address    (default: array())
     * @param string $customerBy (default: 'externalId')
     * @param string $addressBy  (default: 'externalId')
     * @param string $site       (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateAddressesEdit(
        $customerId,
        $addressId,
        array $address = [],
        $customerBy = 'externalId',
        $addressBy = 'externalId',
        $site = null
    ) {
        $addressFiltered = array_filter($address);

        if ((count(array_keys($addressFiltered)) <= 1)
            && (!isset($addressFiltered['text'])
                || (isset($addressFiltered['text']) && empty($addressFiltered['text']))
            )
        ) {
            throw new \InvalidArgumentException(
                'Parameter `address` must contain address text or all other address field'
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$customerId/addresses/$addressId/edit",
            "POST",
            $this->fillSite($site, [
                'address' => json_encode($address),
                'by' => $customerBy,
                'entityBy' => $addressBy
            ])
        );
    }

    /**
     * Get corporate customer companies by id or externalId
     *
     * @param string $id     corporate customer identifier
     * @param array  $filter (default: array())
     * @param int    $page   (default: null)
     * @param int    $limit  (default: null)
     * @param string $by     (default: 'externalId')
     * @param string $site   (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateCompanies(
        $id,
        array $filter = [],
        $page = null,
        $limit = null,
        $by = 'externalId',
        $site = null
    ) {
        $this->checkIdParameter($by);

        $parameters = ['by' => $by];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$id/companies",
            "GET",
            $this->fillSite($site, $parameters)
        );
    }

    /**
     * Create corporate customer company
     *
     * @param string $id       corporate customer identifier
     * @param array  $company  (default: array())
     * @param string $by       (default: 'externalId')
     * @param string $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateCompaniesCreate($id, array $company = [], $by = 'externalId', $site = null)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$id/companies/create",
            "POST",
            $this->fillSite($site, ['company' => json_encode($company), 'by' => $by])
        );
    }

    /**
     * Edit corporate customer company
     *
     * @param string $customerId corporate customer identifier
     * @param string $companyId  corporate customer identifier
     * @param array  $company    (default: array())
     * @param string $customerBy (default: 'externalId')
     * @param string $companyBy  (default: 'externalId')
     * @param string $site       (default: null)
     *
     * @return \RetailCrm\Response\ApiResponse
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     */
    public function customersCorporateCompaniesEdit(
        $customerId,
        $companyId,
        array $company = [],
        $customerBy = 'externalId',
        $companyBy = 'externalId',
        $site = null
    ) {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$customerId/companies/$companyId/edit",
            "POST",
            $this->fillSite($site, [
                'company' => json_encode($company),
                'by' => $customerBy,
                'entityBy' => $companyBy
            ])
        );
    }

    /**
     * Get corporate customer contacts by id or externalId
     *
     * @param string $id     corporate customer identifier
     * @param array  $filter (default: array())
     * @param int    $page   (default: null)
     * @param int    $limit  (default: null)
     * @param string $by     (default: 'externalId')
     * @param string $site   (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateContacts(
        $id,
        array $filter = [],
        $page = null,
        $limit = null,
        $by = 'externalId',
        $site = null
    ) {
        $this->checkIdParameter($by);

        $parameters = ['by' => $by];

        if (count($filter)) {
            $parameters['filter'] = $filter;
        }
        if (null !== $page) {
            $parameters['page'] = (int) $page;
        }
        if (null !== $limit) {
            $parameters['limit'] = (int) $limit;
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$id/contacts",
            "GET",
            $this->fillSite($site, $parameters)
        );
    }

    /**
     * Create corporate customer contact
     *
     * @param string $id      corporate customer identifier
     * @param array  $contact (default: array())
     * @param string $by      (default: 'externalId')
     * @param string $site    (default: null)
     *
     * @return \RetailCrm\Response\ApiResponse
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @throws \InvalidArgumentException
     */
    public function customersCorporateContactsCreate($id, array $contact = [], $by = 'externalId', $site = null)
    {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$id/contacts/create",
            "POST",
            $this->fillSite($site, ['contact' => json_encode($contact), 'by' => $by])
        );
    }

    /**
     * Edit corporate customer contact
     *
     * @param string $customerId corporate customer identifier
     * @param string $contactId  corporate customer identifier
     * @param array  $contact    (default: array())
     * @param string $customerBy (default: 'externalId')
     * @param string $contactBy  (default: 'externalId')
     * @param string $site       (default: null)
     *
     * @return \RetailCrm\Response\ApiResponse
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     */
    public function customersCorporateContactsEdit(
        $customerId,
        $contactId,
        array $contact = [],
        $customerBy = 'externalId',
        $contactBy = 'externalId',
        $site = null
    ) {
        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            "/customers-corporate/$customerId/contacts/$contactId/edit",
            "POST",
            $this->fillSite($site, [
                'contact' => json_encode($contact),
                'by' => $customerBy,
                'entityBy' => $contactBy
            ])
        );
    }

    /**
     * Edit a corporate customer
     *
     * @param array  $customerCorporate corporate customer data
     * @param string $by       (default: 'externalId')
     * @param string $site     (default: null)
     *
     * @throws \InvalidArgumentException
     * @throws \RetailCrm\Exception\CurlException
     * @throws \RetailCrm\Exception\InvalidJsonException
     *
     * @return \RetailCrm\Response\ApiResponse
     */
    public function customersCorporateEdit(array $customerCorporate, $by = 'externalId', $site = null)
    {
        if (!count($customerCorporate)) {
            throw new \InvalidArgumentException(
                'Parameter `customerCorporate` must contains a data'
            );
        }

        $this->checkIdParameter($by);

        if (!array_key_exists($by, $customerCorporate)) {
            throw new \InvalidArgumentException(
                sprintf('Corporate customer array must contain the "%s" parameter.', $by)
            );
        }

        /* @noinspection PhpUndefinedMethodInspection */
        return $this->client->makeRequest(
            sprintf('/customers-corporate/%s/edit', $customerCorporate[$by]),
            "POST",
            $this->fillSite(
                $site,
                ['customerCorporate' => json_encode($customerCorporate), 'by' => $by]
            )
        );
    }
}
