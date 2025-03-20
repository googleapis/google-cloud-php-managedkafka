<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedkafka/v1/managed_kafka_connect.proto

namespace Google\Cloud\ManagedKafka\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for CreateConnectCluster.
 *
 * Generated from protobuf message <code>google.cloud.managedkafka.v1.CreateConnectClusterRequest</code>
 */
class CreateConnectClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent project/location in which to create the Kafka Connect
     * cluster. Structured like
     * `projects/{project}/locations/{location}/`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID to use for the Connect cluster, which will become the
     * final component of the cluster's name. The ID must be 1-63 characters long,
     * and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` to comply
     * with RFC 1035.
     * This value is structured like: `my-cluster-id`.
     *
     * Generated from protobuf field <code>string connect_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $connect_cluster_id = '';
    /**
     * Required. Configuration of the Kafka Connect cluster to create. Its `name`
     * field is ignored.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.ConnectCluster connect_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $connect_cluster = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID to avoid duplication of requests. If a request times out or
     * fails, retrying with the same ID allows the server to recognize the
     * previous attempt. For at least 60 minutes, the server ignores duplicate
     * requests bearing the same ID.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID
     * within 60 minutes of the last request, the server checks if an original
     * operation with the same request ID was received. If so, the server ignores
     * the second request.
     * The request ID must be a valid UUID. A zero UUID is not supported
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string                                       $parent           Required. The parent project/location in which to create the Kafka Connect
     *                                                                       cluster. Structured like
     *                                                                       `projects/{project}/locations/{location}/`. Please see
     *                                                                       {@see ManagedKafkaConnectClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\ManagedKafka\V1\ConnectCluster $connectCluster   Required. Configuration of the Kafka Connect cluster to create. Its `name`
     *                                                                       field is ignored.
     * @param string                                       $connectClusterId Required. The ID to use for the Connect cluster, which will become the
     *                                                                       final component of the cluster's name. The ID must be 1-63 characters long,
     *                                                                       and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` to comply
     *                                                                       with RFC 1035.
     *
     *                                                                       This value is structured like: `my-cluster-id`.
     *
     * @return \Google\Cloud\ManagedKafka\V1\CreateConnectClusterRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ManagedKafka\V1\ConnectCluster $connectCluster, string $connectClusterId): self
    {
        return (new self())
            ->setParent($parent)
            ->setConnectCluster($connectCluster)
            ->setConnectClusterId($connectClusterId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent project/location in which to create the Kafka Connect
     *           cluster. Structured like
     *           `projects/{project}/locations/{location}/`.
     *     @type string $connect_cluster_id
     *           Required. The ID to use for the Connect cluster, which will become the
     *           final component of the cluster's name. The ID must be 1-63 characters long,
     *           and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` to comply
     *           with RFC 1035.
     *           This value is structured like: `my-cluster-id`.
     *     @type \Google\Cloud\ManagedKafka\V1\ConnectCluster $connect_cluster
     *           Required. Configuration of the Kafka Connect cluster to create. Its `name`
     *           field is ignored.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID to avoid duplication of requests. If a request times out or
     *           fails, retrying with the same ID allows the server to recognize the
     *           previous attempt. For at least 60 minutes, the server ignores duplicate
     *           requests bearing the same ID.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID
     *           within 60 minutes of the last request, the server checks if an original
     *           operation with the same request ID was received. If so, the server ignores
     *           the second request.
     *           The request ID must be a valid UUID. A zero UUID is not supported
     *           (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedkafka\V1\ManagedKafkaConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent project/location in which to create the Kafka Connect
     * cluster. Structured like
     * `projects/{project}/locations/{location}/`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent project/location in which to create the Kafka Connect
     * cluster. Structured like
     * `projects/{project}/locations/{location}/`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the Connect cluster, which will become the
     * final component of the cluster's name. The ID must be 1-63 characters long,
     * and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` to comply
     * with RFC 1035.
     * This value is structured like: `my-cluster-id`.
     *
     * Generated from protobuf field <code>string connect_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConnectClusterId()
    {
        return $this->connect_cluster_id;
    }

    /**
     * Required. The ID to use for the Connect cluster, which will become the
     * final component of the cluster's name. The ID must be 1-63 characters long,
     * and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` to comply
     * with RFC 1035.
     * This value is structured like: `my-cluster-id`.
     *
     * Generated from protobuf field <code>string connect_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConnectClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->connect_cluster_id = $var;

        return $this;
    }

    /**
     * Required. Configuration of the Kafka Connect cluster to create. Its `name`
     * field is ignored.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.ConnectCluster connect_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ManagedKafka\V1\ConnectCluster|null
     */
    public function getConnectCluster()
    {
        return $this->connect_cluster;
    }

    public function hasConnectCluster()
    {
        return isset($this->connect_cluster);
    }

    public function clearConnectCluster()
    {
        unset($this->connect_cluster);
    }

    /**
     * Required. Configuration of the Kafka Connect cluster to create. Its `name`
     * field is ignored.
     *
     * Generated from protobuf field <code>.google.cloud.managedkafka.v1.ConnectCluster connect_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ManagedKafka\V1\ConnectCluster $var
     * @return $this
     */
    public function setConnectCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedKafka\V1\ConnectCluster::class);
        $this->connect_cluster = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID to avoid duplication of requests. If a request times out or
     * fails, retrying with the same ID allows the server to recognize the
     * previous attempt. For at least 60 minutes, the server ignores duplicate
     * requests bearing the same ID.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID
     * within 60 minutes of the last request, the server checks if an original
     * operation with the same request ID was received. If so, the server ignores
     * the second request.
     * The request ID must be a valid UUID. A zero UUID is not supported
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID to avoid duplication of requests. If a request times out or
     * fails, retrying with the same ID allows the server to recognize the
     * previous attempt. For at least 60 minutes, the server ignores duplicate
     * requests bearing the same ID.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID
     * within 60 minutes of the last request, the server checks if an original
     * operation with the same request ID was received. If so, the server ignores
     * the second request.
     * The request ID must be a valid UUID. A zero UUID is not supported
     * (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

