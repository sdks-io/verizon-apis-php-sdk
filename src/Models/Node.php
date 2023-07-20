<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class Node implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $modifiedAt;

    /**
     * @var string|null
     */
    private $nodeId;

    /**
     * @var string|null
     */
    private $privateIp;

    /**
     * @var int|null
     */
    private $numCores;

    /**
     * @var int|null
     */
    private $totalMemory;

    /**
     * @var string|null
     */
    private $clusterId;

    /**
     * @var string[]|null
     */
    private $roles;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var bool|null
     */
    private $approved;

    /**
     * @var string|null
     */
    private $status;

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
     * Returns Node Id.
     */
    public function getNodeId(): ?string
    {
        return $this->nodeId;
    }

    /**
     * Sets Node Id.
     *
     * @maps node_id
     */
    public function setNodeId(?string $nodeId): void
    {
        $this->nodeId = $nodeId;
    }

    /**
     * Returns Private Ip.
     */
    public function getPrivateIp(): ?string
    {
        return $this->privateIp;
    }

    /**
     * Sets Private Ip.
     *
     * @maps private_ip
     */
    public function setPrivateIp(?string $privateIp): void
    {
        $this->privateIp = $privateIp;
    }

    /**
     * Returns Num Cores.
     */
    public function getNumCores(): ?int
    {
        return $this->numCores;
    }

    /**
     * Sets Num Cores.
     *
     * @maps num_cores
     */
    public function setNumCores(?int $numCores): void
    {
        $this->numCores = $numCores;
    }

    /**
     * Returns Total Memory.
     */
    public function getTotalMemory(): ?int
    {
        return $this->totalMemory;
    }

    /**
     * Sets Total Memory.
     *
     * @maps total_memory
     */
    public function setTotalMemory(?int $totalMemory): void
    {
        $this->totalMemory = $totalMemory;
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
     * Returns Roles.
     *
     * @return string[]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * Sets Roles.
     *
     * @maps roles
     *
     * @param string[]|null $roles
     */
    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
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
     * Returns Approved.
     */
    public function getApproved(): ?bool
    {
        return $this->approved;
    }

    /**
     * Sets Approved.
     *
     * @maps approved
     */
    public function setApproved(?bool $approved): void
    {
        $this->approved = $approved;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
        if (isset($this->name)) {
            $json['name']         = $this->name;
        }
        if (isset($this->createdAt)) {
            $json['created_at']   = $this->createdAt;
        }
        if (isset($this->modifiedAt)) {
            $json['modified_at']  = $this->modifiedAt;
        }
        if (isset($this->nodeId)) {
            $json['node_id']      = $this->nodeId;
        }
        if (isset($this->privateIp)) {
            $json['private_ip']   = $this->privateIp;
        }
        if (isset($this->numCores)) {
            $json['num_cores']    = $this->numCores;
        }
        if (isset($this->totalMemory)) {
            $json['total_memory'] = $this->totalMemory;
        }
        if (isset($this->clusterId)) {
            $json['cluster_id']   = $this->clusterId;
        }
        if (isset($this->roles)) {
            $json['roles']        = $this->roles;
        }
        if (isset($this->id)) {
            $json['id']           = $this->id;
        }
        if (isset($this->approved)) {
            $json['approved']     = $this->approved;
        }
        if (isset($this->status)) {
            $json['status']       = $this->status;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}