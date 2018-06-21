<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * For instructions on how to run the full sample:
 *
 * @see https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/monitoring/README.md
 */

namespace Google\Cloud\Samples\Monitoring;

// [START monitoring_alert_restore_policies]
use Google\Cloud\Monitoring\V3\MetricServiceClient;
use Google\Api\LabelDescriptor;
use Google\Api\LabelDescriptor_ValueType;
use Google\Api\MetricDescriptor;
use Google\Api\MetricDescriptor_MetricKind;
use Google\Api\MetricDescriptor_ValueType;

/**
 * Adds a new column to the Albums table in the example database.
 * Example:
 * ```
 * alert_restore_policies($projectId);
 * ```
 *
 * @param string $projectId Your project ID
 */
function alert_restore_policies($projectId)
{
    $metrics = new MetricServiceClient([
        'projectId' => $projectId,
    ]);
}
// [END monitoring_alert_restore_policies]