<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ServiceOnboardingHelmGitBranch implements \JsonSerializable
{
    /**
     * @var string
     */
    private $branchName;

    /**
     * @var string
     */
    private $helmChartPath;

    /**
     * @var string[]|null
     */
    private $valuesYamlPaths;

    /**
     * @param string $branchName
     * @param string $helmChartPath
     */
    public function __construct(string $branchName, string $helmChartPath)
    {
        $this->branchName = $branchName;
        $this->helmChartPath = $helmChartPath;
    }

    /**
     * Returns Branch Name.
     * The user can provide branchName for the Helm chart.
     */
    public function getBranchName(): string
    {
        return $this->branchName;
    }

    /**
     * Sets Branch Name.
     * The user can provide branchName for the Helm chart.
     *
     * @required
     * @maps branchName
     */
    public function setBranchName(string $branchName): void
    {
        $this->branchName = $branchName;
    }

    /**
     * Returns Helm Chart Path.
     * The user can provide the path to the Helm chart.
     */
    public function getHelmChartPath(): string
    {
        return $this->helmChartPath;
    }

    /**
     * Sets Helm Chart Path.
     * The user can provide the path to the Helm chart.
     *
     * @required
     * @maps helmChartPath
     */
    public function setHelmChartPath(string $helmChartPath): void
    {
        $this->helmChartPath = $helmChartPath;
    }

    /**
     * Returns Values Yaml Paths.
     * The user can provide an array of values.YAML files paths.
     *
     * @return string[]|null
     */
    public function getValuesYamlPaths(): ?array
    {
        return $this->valuesYamlPaths;
    }

    /**
     * Sets Values Yaml Paths.
     * The user can provide an array of values.YAML files paths.
     *
     * @maps valuesYamlPaths
     *
     * @param string[]|null $valuesYamlPaths
     */
    public function setValuesYamlPaths(?array $valuesYamlPaths): void
    {
        $this->valuesYamlPaths = $valuesYamlPaths;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['branchName']          = $this->branchName;
        $json['helmChartPath']       = $this->helmChartPath;
        if (isset($this->valuesYamlPaths)) {
            $json['valuesYamlPaths'] = $this->valuesYamlPaths;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
