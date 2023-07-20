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
 * Workload attribute of a service.
 */
class Workload implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $packageType = [];

    /**
     * @var string|null
     */
    private $uploadType;

    /**
     * @var array
     */
    private $repositoryType = [];

    /**
     * @var array
     */
    private $repositoryId = [];

    /**
     * @var Repository|null
     */
    private $repository;

    /**
     * @var array
     */
    private $files = [];

    /**
     * @var string|null
     */
    private $revisionType;

    /**
     * @var ServiceOnboardingHelmGitBranch|null
     */
    private $helmGitBranch;

    /**
     * @var ServiceOnboardingHelmGitTag|null
     */
    private $helmGitTag;

    /**
     * @var ServiceOnboardingHelmYamlGitTag|null
     */
    private $helmYamlGitTag;

    /**
     * @var ServiceOnboardingHelmHelmrepo|null
     */
    private $helmHelmrepo;

    /**
     * @var ServiceOnboardingYamlGitBranch|null
     */
    private $yamlGitBranch;

    /**
     * @var ServiceOnboardingTerraformGitBranch|null
     */
    private $terraformGitBranch;

    /**
     * @var ServiceOnboardingTerraformGitTag|null
     */
    private $terraformGitTag;

    /**
     * @var \DateTime|null
     */
    private $createdDate;

    /**
     * @var \DateTime|null
     */
    private $lastModifiedDte;

    /**
     * @var string|null
     */
    private $createdBy;

    /**
     * @var string|null
     */
    private $updatedBy;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns Id.
     * The auto-generated Id of the workload.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The auto-generated Id of the workload.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * Name of the workload needs to be deployed.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the workload needs to be deployed.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Description.
     * A brief workload description.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * A brief workload description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * A brief workload description.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Package Type.
     * Deployment package type.
     */
    public function getPackageType(): ?string
    {
        if (count($this->packageType) == 0) {
            return null;
        }
        return $this->packageType['value'];
    }

    /**
     * Sets Package Type.
     * Deployment package type.
     *
     * @maps packageType
     * @factory \VerizonLib\Models\ServiceDependencyPackageTypeEnum::checkValue
     */
    public function setPackageType(?string $packageType): void
    {
        $this->packageType['value'] = $packageType;
    }

    /**
     * Unsets Package Type.
     * Deployment package type.
     */
    public function unsetPackageType(): void
    {
        $this->packageType = [];
    }

    /**
     * Returns Upload Type.
     * Allowed values are: GIT files (PULL_FROM_REPO), MANUAL_UPLOAD.
     */
    public function getUploadType(): ?string
    {
        return $this->uploadType;
    }

    /**
     * Sets Upload Type.
     * Allowed values are: GIT files (PULL_FROM_REPO), MANUAL_UPLOAD.
     *
     * @maps uploadType
     * @factory \VerizonLib\Models\UploadTypeEnum::checkValue
     */
    public function setUploadType(?string $uploadType): void
    {
        $this->uploadType = $uploadType;
    }

    /**
     * Returns Repository Type.
     * Repository types allowed: GIT/HELM.
     */
    public function getRepositoryType(): ?string
    {
        if (count($this->repositoryType) == 0) {
            return null;
        }
        return $this->repositoryType['value'];
    }

    /**
     * Sets Repository Type.
     * Repository types allowed: GIT/HELM.
     *
     * @maps repositoryType
     * @factory \VerizonLib\Models\WorkloadRepositoryTypeEnum::checkValue
     */
    public function setRepositoryType(?string $repositoryType): void
    {
        $this->repositoryType['value'] = $repositoryType;
    }

    /**
     * Unsets Repository Type.
     * Repository types allowed: GIT/HELM.
     */
    public function unsetRepositoryType(): void
    {
        $this->repositoryType = [];
    }

    /**
     * Returns Repository Id.
     * In case of 'Pull files from my repository', The user can provide the existing repositoryID.
     */
    public function getRepositoryId(): ?string
    {
        if (count($this->repositoryId) == 0) {
            return null;
        }
        return $this->repositoryId['value'];
    }

    /**
     * Sets Repository Id.
     * In case of 'Pull files from my repository', The user can provide the existing repositoryID.
     *
     * @maps repositoryId
     */
    public function setRepositoryId(?string $repositoryId): void
    {
        $this->repositoryId['value'] = $repositoryId;
    }

    /**
     * Unsets Repository Id.
     * In case of 'Pull files from my repository', The user can provide the existing repositoryID.
     */
    public function unsetRepositoryId(): void
    {
        $this->repositoryId = [];
    }

    /**
     * Returns Repository.
     * Users can create a repository to maintain service artifacts. Repository would be either a Git or
     * HELM repository.
     */
    public function getRepository(): ?Repository
    {
        return $this->repository;
    }

    /**
     * Sets Repository.
     * Users can create a repository to maintain service artifacts. Repository would be either a Git or
     * HELM repository.
     *
     * @maps repository
     */
    public function setRepository(?Repository $repository): void
    {
        $this->repository = $repository;
    }

    /**
     * Returns Files.
     * Files which are being generated.
     *
     * @return string[]|null
     */
    public function getFiles(): ?array
    {
        if (count($this->files) == 0) {
            return null;
        }
        return $this->files['value'];
    }

    /**
     * Sets Files.
     * Files which are being generated.
     *
     * @maps files
     *
     * @param string[]|null $files
     */
    public function setFiles(?array $files): void
    {
        $this->files['value'] = $files;
    }

    /**
     * Unsets Files.
     * Files which are being generated.
     */
    public function unsetFiles(): void
    {
        $this->files = [];
    }

    /**
     * Returns Revision Type.
     * Revision type can be a BRANCH or TAG.
     */
    public function getRevisionType(): ?string
    {
        return $this->revisionType;
    }

    /**
     * Sets Revision Type.
     * Revision type can be a BRANCH or TAG.
     *
     * @maps revisionType
     * @factory \VerizonLib\Models\WorkloadRevisionTypeEnum::checkValue
     */
    public function setRevisionType(?string $revisionType): void
    {
        $this->revisionType = $revisionType;
    }

    /**
     * Returns Helm Git Branch.
     */
    public function getHelmGitBranch(): ?ServiceOnboardingHelmGitBranch
    {
        return $this->helmGitBranch;
    }

    /**
     * Sets Helm Git Branch.
     *
     * @maps helmGitBranch
     */
    public function setHelmGitBranch(?ServiceOnboardingHelmGitBranch $helmGitBranch): void
    {
        $this->helmGitBranch = $helmGitBranch;
    }

    /**
     * Returns Helm Git Tag.
     */
    public function getHelmGitTag(): ?ServiceOnboardingHelmGitTag
    {
        return $this->helmGitTag;
    }

    /**
     * Sets Helm Git Tag.
     *
     * @maps helmGitTag
     */
    public function setHelmGitTag(?ServiceOnboardingHelmGitTag $helmGitTag): void
    {
        $this->helmGitTag = $helmGitTag;
    }

    /**
     * Returns Helm Yaml Git Tag.
     */
    public function getHelmYamlGitTag(): ?ServiceOnboardingHelmYamlGitTag
    {
        return $this->helmYamlGitTag;
    }

    /**
     * Sets Helm Yaml Git Tag.
     *
     * @maps helmYamlGitTag
     */
    public function setHelmYamlGitTag(?ServiceOnboardingHelmYamlGitTag $helmYamlGitTag): void
    {
        $this->helmYamlGitTag = $helmYamlGitTag;
    }

    /**
     * Returns Helm Helmrepo.
     */
    public function getHelmHelmrepo(): ?ServiceOnboardingHelmHelmrepo
    {
        return $this->helmHelmrepo;
    }

    /**
     * Sets Helm Helmrepo.
     *
     * @maps helmHelmrepo
     */
    public function setHelmHelmrepo(?ServiceOnboardingHelmHelmrepo $helmHelmrepo): void
    {
        $this->helmHelmrepo = $helmHelmrepo;
    }

    /**
     * Returns Yaml Git Branch.
     */
    public function getYamlGitBranch(): ?ServiceOnboardingYamlGitBranch
    {
        return $this->yamlGitBranch;
    }

    /**
     * Sets Yaml Git Branch.
     *
     * @maps yamlGitBranch
     */
    public function setYamlGitBranch(?ServiceOnboardingYamlGitBranch $yamlGitBranch): void
    {
        $this->yamlGitBranch = $yamlGitBranch;
    }

    /**
     * Returns Terraform Git Branch.
     */
    public function getTerraformGitBranch(): ?ServiceOnboardingTerraformGitBranch
    {
        return $this->terraformGitBranch;
    }

    /**
     * Sets Terraform Git Branch.
     *
     * @maps terraformGitBranch
     */
    public function setTerraformGitBranch(?ServiceOnboardingTerraformGitBranch $terraformGitBranch): void
    {
        $this->terraformGitBranch = $terraformGitBranch;
    }

    /**
     * Returns Terraform Git Tag.
     */
    public function getTerraformGitTag(): ?ServiceOnboardingTerraformGitTag
    {
        return $this->terraformGitTag;
    }

    /**
     * Sets Terraform Git Tag.
     *
     * @maps terraformGitTag
     */
    public function setTerraformGitTag(?ServiceOnboardingTerraformGitTag $terraformGitTag): void
    {
        $this->terraformGitTag = $terraformGitTag;
    }

    /**
     * Returns Created Date.
     * The date on which the workload is created.
     */
    public function getCreatedDate(): ?\DateTime
    {
        return $this->createdDate;
    }

    /**
     * Sets Created Date.
     * The date on which the workload is created.
     *
     * @maps createdDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedDate(?\DateTime $createdDate): void
    {
        $this->createdDate = $createdDate;
    }

    /**
     * Returns Last Modified Dte.
     * The date when the created workload was last modified.
     */
    public function getLastModifiedDte(): ?\DateTime
    {
        return $this->lastModifiedDte;
    }

    /**
     * Sets Last Modified Dte.
     * The date when the created workload was last modified.
     *
     * @maps lastModifiedDte
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLastModifiedDte(?\DateTime $lastModifiedDte): void
    {
        $this->lastModifiedDte = $lastModifiedDte;
    }

    /**
     * Returns Created By.
     * Identity of the user who created the workload.
     */
    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    /**
     * Sets Created By.
     * Identity of the user who created the workload.
     *
     * @maps createdBy
     */
    public function setCreatedBy(?string $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * Returns Updated By.
     * Identity of the user who updated the workload.
     */
    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    /**
     * Sets Updated By.
     * Identity of the user who updated the workload.
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
            $json['id']                 = $this->id;
        }
        $json['name']                   = $this->name;
        if (!empty($this->description)) {
            $json['description']        = $this->description['value'];
        }
        if (!empty($this->packageType)) {
            $json['packageType']        = ServiceDependencyPackageTypeEnum::checkValue($this->packageType['value']);
        }
        if (isset($this->uploadType)) {
            $json['uploadType']         = UploadTypeEnum::checkValue($this->uploadType);
        }
        if (!empty($this->repositoryType)) {
            $json['repositoryType']     = WorkloadRepositoryTypeEnum::checkValue($this->repositoryType['value']);
        }
        if (!empty($this->repositoryId)) {
            $json['repositoryId']       = $this->repositoryId['value'];
        }
        if (isset($this->repository)) {
            $json['repository']         = $this->repository;
        }
        if (!empty($this->files)) {
            $json['files']              = $this->files['value'];
        }
        if (isset($this->revisionType)) {
            $json['revisionType']       = WorkloadRevisionTypeEnum::checkValue($this->revisionType);
        }
        if (isset($this->helmGitBranch)) {
            $json['helmGitBranch']      = $this->helmGitBranch;
        }
        if (isset($this->helmGitTag)) {
            $json['helmGitTag']         = $this->helmGitTag;
        }
        if (isset($this->helmYamlGitTag)) {
            $json['helmYamlGitTag']     = $this->helmYamlGitTag;
        }
        if (isset($this->helmHelmrepo)) {
            $json['helmHelmrepo']       = $this->helmHelmrepo;
        }
        if (isset($this->yamlGitBranch)) {
            $json['yamlGitBranch']      = $this->yamlGitBranch;
        }
        if (isset($this->terraformGitBranch)) {
            $json['terraformGitBranch'] = $this->terraformGitBranch;
        }
        if (isset($this->terraformGitTag)) {
            $json['terraformGitTag']    = $this->terraformGitTag;
        }
        if (isset($this->createdDate)) {
            $json['createdDate']        = DateTimeHelper::toRfc3339DateTime($this->createdDate);
        }
        if (isset($this->lastModifiedDte)) {
            $json['lastModifiedDte']    = DateTimeHelper::toRfc3339DateTime($this->lastModifiedDte);
        }
        if (isset($this->createdBy)) {
            $json['createdBy']          = $this->createdBy;
        }
        if (isset($this->updatedBy)) {
            $json['updatedBy']          = $this->updatedBy;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
