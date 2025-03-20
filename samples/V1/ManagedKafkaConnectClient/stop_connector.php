<?php
/*
 * Copyright 2025 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START managedkafka_v1_generated_ManagedKafkaConnect_StopConnector_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\ManagedKafka\V1\Client\ManagedKafkaConnectClient;
use Google\Cloud\ManagedKafka\V1\StopConnectorRequest;
use Google\Cloud\ManagedKafka\V1\StopConnectorResponse;

/**
 * Stops the connector.
 *
 * @param string $formattedName The name of the connector to stop.
 *                              Structured like:
 *                              projects/{project}/locations/{location}/connectClusters/{connectCluster}/connectors/{connector}
 *                              Please see {@see ManagedKafkaConnectClient::connectorName()} for help formatting this field.
 */
function stop_connector_sample(string $formattedName): void
{
    // Create a client.
    $managedKafkaConnectClient = new ManagedKafkaConnectClient();

    // Prepare the request message.
    $request = (new StopConnectorRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var StopConnectorResponse $response */
        $response = $managedKafkaConnectClient->stopConnector($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = ManagedKafkaConnectClient::connectorName(
        '[PROJECT]',
        '[LOCATION]',
        '[CONNECT_CLUSTER]',
        '[CONNECTOR]'
    );

    stop_connector_sample($formattedName);
}
// [END managedkafka_v1_generated_ManagedKafkaConnect_StopConnector_sync]
