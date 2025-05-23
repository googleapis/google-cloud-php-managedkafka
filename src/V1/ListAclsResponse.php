<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/v1/managed_kafka.proto

namespace Google\Cloud\ManagedKafka\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for ListAcls.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.v1.ListAclsResponse</code>
 */
class ListAclsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of acls in the requested parent. The order of the acls is
     * unspecified.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedkafka.v1.Acl acls = 1;</code>
     */
    private $acls;
    /**
     * A token that can be sent as `page_token` to retrieve the next page of
     * results. If this field is omitted, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ManagedKafka\V1\Acl>|\Google\Protobuf\Internal\RepeatedField $acls
     *           The list of acls in the requested parent. The order of the acls is
     *           unspecified.
     *     @type string $next_page_token
     *           A token that can be sent as `page_token` to retrieve the next page of
     *           results. If this field is omitted, there are no more results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\V1\ManagedKafka::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of acls in the requested parent. The order of the acls is
     * unspecified.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedkafka.v1.Acl acls = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAcls()
    {
        return $this->acls;
    }

    /**
     * The list of acls in the requested parent. The order of the acls is
     * unspecified.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedkafka.v1.Acl acls = 1;</code>
     * @param array<\Google\Cloud\ManagedKafka\V1\Acl>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAcls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ManagedKafka\V1\Acl::class);
        $this->acls = $arr;

        return $this;
    }

    /**
     * A token that can be sent as `page_token` to retrieve the next page of
     * results. If this field is omitted, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token that can be sent as `page_token` to retrieve the next page of
     * results. If this field is omitted, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

