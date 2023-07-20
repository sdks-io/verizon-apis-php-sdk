<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ProjectItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $projectId;

    /**
     * @var string|null
     */
    private $clusterId;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $modifiedAt;

    /**
     * Returns Project Id.
     */
    public function getProjectId(): ?string
    {
        return $this->projectId;
    }

    /**
     * Sets Project Id.
     *
     * @maps project_id
     */
    public function setProjectId(?string $projectId): void
    {
        $this->projectId = $projectId;
    }

    /**
     * Returns Cluster Id.
     */
    public function getClusterId(): ?string
    {
        return $this->clusterId;
    }

    /**
     * Sets Cluster Id.
     *
     * @maps cluster_id
     */
    public function setClusterId(?string $clusterId): void
    {
        $this->clusterId = $clusterId;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Modified At.
     */
    public function getModifiedAt(): ?string
    {
        return $this->modifiedAt;
    }

    /**
     * Sets Modified At.
     *
     * @maps modified_at
     */
    public function setModifiedAt(?string $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
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
        if (isset($this->projectId)) {
            $json['project_id']  = $this->projectId;
        }
        if (isset($this->clusterId)) {
            $json['cluster_id']  = $this->clusterId;
        }
        if (isset($this->id)) {
            $json['id']          = $this->id;
        }
        if (isset($this->createdAt)) {
            $json['created_at']  = $this->createdAt;
        }
        if (isset($this->modifiedAt)) {
            $json['modified_at'] = $this->modifiedAt;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
