<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of DescribeIpControls
 *
 * @method string getIpControlId()
 * @method string getSecurityToken()
 * @method string getIpControlName()
 * @method string getIpControlType()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class DescribeIpControlsRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'CloudAPI',
            '2016-07-14',
            'DescribeIpControls'
        );
    }

    /**
     * @param string $ipControlId
     *
     * @return $this
     */
    public function setIpControlId($ipControlId)
    {
        $this->requestParameters['IpControlId'] = $ipControlId;
        $this->queryParameters['IpControlId'] = $ipControlId;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $ipControlName
     *
     * @return $this
     */
    public function setIpControlName($ipControlName)
    {
        $this->requestParameters['IpControlName'] = $ipControlName;
        $this->queryParameters['IpControlName'] = $ipControlName;

        return $this;
    }

    /**
     * @param string $ipControlType
     *
     * @return $this
     */
    public function setIpControlType($ipControlType)
    {
        $this->requestParameters['IpControlType'] = $ipControlType;
        $this->queryParameters['IpControlType'] = $ipControlType;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
