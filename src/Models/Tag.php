<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;
use VerizonLib\Utils\DateTimeHelper;

/**
 * Any name for the tag.
 */
class Tag implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var \DateTime|null
     */
    private $createdDate;

    /**
     * @var \DateTime|null
     */
    private $lastModifiedDate;

    /**
     * @var string|null
     */
    private $createdBy;

    /**
     * @var string|null
     */
    private $updatedBy;

    /**
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * Returns Id.
     * Id of the user creating the repository.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Id of the user creating the repository.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Key.
     * Key properties/metadata attribute.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * Key properties/metadata attribute.
     *
     * @required
     * @maps key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Description.
     * Description for the repository being created.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Description for the repository being created.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Value.
     * Properties/metadata value attribute.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * Properties/metadata value attribute.
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Created Date.
     * Date when the repository was created.
     */
    public function getCreatedDate(): ?\DateTime
    {
        return $this->createdDate;
    }

    /**
     * Sets Created Date.
     * Date when the repository was created.
     *
     * @maps createdDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedDate(?\DateTime $createdDate): void
    {
        $this->createdDate = $createdDate;
    }

    /**
     * Returns Last Modified Date.
     * Date when the repository was updated.
     */
    public function getLastModifiedDate(): ?\DateTime
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets Last Modified Date.
     * Date when the repository was updated.
     *
     * @maps lastModifiedDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLastModifiedDate(?\DateTime $lastModifiedDate): void
    {
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * Returns Created By.
     * User information by whom the repository was created.
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * Sets Created By.
     * User information by whom the repository was created.
     *
     * @maps createdBy
     */
    public function setCreatedBy(?string $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * Returns Updated By.
     * User information by whom the repository was updated.
     */
    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    /**
     * Sets Updated By.
     * User information by whom the repository was updated.
     *
     * @maps updatedBy
     */
    public function setUpdatedBy(?string $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
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
        if (isset($this->id)) {
            $json['id']               = $this->id;
        }
        $json['key']                  = $this->key;
        if (isset($this->description)) {
            $json['description']      = $this->description;
        }
        if (isset($this->value)) {
            $json['value']            = $this->value;
        }
        if (isset($this->createdDate)) {
            $json['createdDate']      = DateTimeHelper::toRfc3339DateTime($this->createdDate);
        }
        if (isset($this->lastModifiedDate)) {
            $json['lastModifiedDate'] = DateTimeHelper::toRfc3339DateTime($this->lastModifiedDate);
        }
        if (isset($this->createdBy)) {
            $json['createdBy']        = $this->createdBy;
        }
        if (isset($this->updatedBy)) {
            $json['updatedBy']        = $this->updatedBy;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
