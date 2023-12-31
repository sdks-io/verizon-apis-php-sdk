<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class MetadataLabel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $alphaRafayIoClusterName;

    /**
     * @var string|null
     */
    private $alphaRafayIoInstanceId;

    /**
     * @var string|null
     */
    private $alphaRafayIoNodegroupName;

    /**
     * @var string|null
     */
    private $betaKubernetesIoArch;

    /**
     * @var string|null
     */
    private $betaKubernetesIoInstanceType;

    /**
     * @var string|null
     */
    private $betaKubernetesIoOs;

    /**
     * @var string|null
     */
    private $failureDomainBetaKubernetesIoRegion;

    /**
     * @var string|null
     */
    private $failureDomainBetaKubernetesIoZone;

    /**
     * @var string|null
     */
    private $kubernetesIoArch;

    /**
     * @var string|null
     */
    private $kubernetesIoHostname;

    /**
     * @var string|null
     */
    private $kubernetesIoOs;

    /**
     * @var string|null
     */
    private $nodeLifecycle;

    /**
     * @var string|null
     */
    private $nodeKubernetesIoInstanceType;

    /**
     * @var string|null
     */
    private $topologyKubernetesIoRegion;

    /**
     * @var string|null
     */
    private $topologyKubernetesIoZone;

    /**
     * Returns Alpha Rafay Io Cluster Name.
     */
    public function getAlphaRafayIoClusterName(): ?string
    {
        return $this->alphaRafayIoClusterName;
    }

    /**
     * Sets Alpha Rafay Io Cluster Name.
     *
     * @maps alpha.rafay.io/cluster-name
     */
    public function setAlphaRafayIoClusterName(?string $alphaRafayIoClusterName): void
    {
        $this->alphaRafayIoClusterName = $alphaRafayIoClusterName;
    }

    /**
     * Returns Alpha Rafay Io Instance Id.
     */
    public function getAlphaRafayIoInstanceId(): ?string
    {
        return $this->alphaRafayIoInstanceId;
    }

    /**
     * Sets Alpha Rafay Io Instance Id.
     *
     * @maps alpha.rafay.io/instance-id
     */
    public function setAlphaRafayIoInstanceId(?string $alphaRafayIoInstanceId): void
    {
        $this->alphaRafayIoInstanceId = $alphaRafayIoInstanceId;
    }

    /**
     * Returns Alpha Rafay Io Nodegroup Name.
     */
    public function getAlphaRafayIoNodegroupName(): ?string
    {
        return $this->alphaRafayIoNodegroupName;
    }

    /**
     * Sets Alpha Rafay Io Nodegroup Name.
     *
     * @maps alpha.rafay.io/nodegroup-name
     */
    public function setAlphaRafayIoNodegroupName(?string $alphaRafayIoNodegroupName): void
    {
        $this->alphaRafayIoNodegroupName = $alphaRafayIoNodegroupName;
    }

    /**
     * Returns Beta Kubernetes Io Arch.
     */
    public function getBetaKubernetesIoArch(): ?string
    {
        return $this->betaKubernetesIoArch;
    }

    /**
     * Sets Beta Kubernetes Io Arch.
     *
     * @maps beta.kubernetes.io/arch
     */
    public function setBetaKubernetesIoArch(?string $betaKubernetesIoArch): void
    {
        $this->betaKubernetesIoArch = $betaKubernetesIoArch;
    }

    /**
     * Returns Beta Kubernetes Io Instance Type.
     */
    public function getBetaKubernetesIoInstanceType(): ?string
    {
        return $this->betaKubernetesIoInstanceType;
    }

    /**
     * Sets Beta Kubernetes Io Instance Type.
     *
     * @maps beta.kubernetes.io/instance-type
     */
    public function setBetaKubernetesIoInstanceType(?string $betaKubernetesIoInstanceType): void
    {
        $this->betaKubernetesIoInstanceType = $betaKubernetesIoInstanceType;
    }

    /**
     * Returns Beta Kubernetes Io Os.
     */
    public function getBetaKubernetesIoOs(): ?string
    {
        return $this->betaKubernetesIoOs;
    }

    /**
     * Sets Beta Kubernetes Io Os.
     *
     * @maps beta.kubernetes.io/os
     */
    public function setBetaKubernetesIoOs(?string $betaKubernetesIoOs): void
    {
        $this->betaKubernetesIoOs = $betaKubernetesIoOs;
    }

    /**
     * Returns Failure Domain Beta Kubernetes Io Region.
     */
    public function getFailureDomainBetaKubernetesIoRegion(): ?string
    {
        return $this->failureDomainBetaKubernetesIoRegion;
    }

    /**
     * Sets Failure Domain Beta Kubernetes Io Region.
     *
     * @maps failure-domain.beta.kubernetes.io/region
     */
    public function setFailureDomainBetaKubernetesIoRegion(?string $failureDomainBetaKubernetesIoRegion): void
    {
        $this->failureDomainBetaKubernetesIoRegion = $failureDomainBetaKubernetesIoRegion;
    }

    /**
     * Returns Failure Domain Beta Kubernetes Io Zone.
     */
    public function getFailureDomainBetaKubernetesIoZone(): ?string
    {
        return $this->failureDomainBetaKubernetesIoZone;
    }

    /**
     * Sets Failure Domain Beta Kubernetes Io Zone.
     *
     * @maps failure-domain.beta.kubernetes.io/zone
     */
    public function setFailureDomainBetaKubernetesIoZone(?string $failureDomainBetaKubernetesIoZone): void
    {
        $this->failureDomainBetaKubernetesIoZone = $failureDomainBetaKubernetesIoZone;
    }

    /**
     * Returns Kubernetes Io Arch.
     */
    public function getKubernetesIoArch(): ?string
    {
        return $this->kubernetesIoArch;
    }

    /**
     * Sets Kubernetes Io Arch.
     *
     * @maps kubernetes.io/arch
     */
    public function setKubernetesIoArch(?string $kubernetesIoArch): void
    {
        $this->kubernetesIoArch = $kubernetesIoArch;
    }

    /**
     * Returns Kubernetes Io Hostname.
     */
    public function getKubernetesIoHostname(): ?string
    {
        return $this->kubernetesIoHostname;
    }

    /**
     * Sets Kubernetes Io Hostname.
     *
     * @maps kubernetes.io/hostname
     */
    public function setKubernetesIoHostname(?string $kubernetesIoHostname): void
    {
        $this->kubernetesIoHostname = $kubernetesIoHostname;
    }

    /**
     * Returns Kubernetes Io Os.
     */
    public function getKubernetesIoOs(): ?string
    {
        return $this->kubernetesIoOs;
    }

    /**
     * Sets Kubernetes Io Os.
     *
     * @maps kubernetes.io/os
     */
    public function setKubernetesIoOs(?string $kubernetesIoOs): void
    {
        $this->kubernetesIoOs = $kubernetesIoOs;
    }

    /**
     * Returns Node Lifecycle.
     */
    public function getNodeLifecycle(): ?string
    {
        return $this->nodeLifecycle;
    }

    /**
     * Sets Node Lifecycle.
     *
     * @maps node-lifecycle
     */
    public function setNodeLifecycle(?string $nodeLifecycle): void
    {
        $this->nodeLifecycle = $nodeLifecycle;
    }

    /**
     * Returns Node Kubernetes Io Instance Type.
     */
    public function getNodeKubernetesIoInstanceType(): ?string
    {
        return $this->nodeKubernetesIoInstanceType;
    }

    /**
     * Sets Node Kubernetes Io Instance Type.
     *
     * @maps node.kubernetes.io/instance-type
     */
    public function setNodeKubernetesIoInstanceType(?string $nodeKubernetesIoInstanceType): void
    {
        $this->nodeKubernetesIoInstanceType = $nodeKubernetesIoInstanceType;
    }

    /**
     * Returns Topology Kubernetes Io Region.
     */
    public function getTopologyKubernetesIoRegion(): ?string
    {
        return $this->topologyKubernetesIoRegion;
    }

    /**
     * Sets Topology Kubernetes Io Region.
     *
     * @maps topology.kubernetes.io/region
     */
    public function setTopologyKubernetesIoRegion(?string $topologyKubernetesIoRegion): void
    {
        $this->topologyKubernetesIoRegion = $topologyKubernetesIoRegion;
    }

    /**
     * Returns Topology Kubernetes Io Zone.
     */
    public function getTopologyKubernetesIoZone(): ?string
    {
        return $this->topologyKubernetesIoZone;
    }

    /**
     * Sets Topology Kubernetes Io Zone.
     *
     * @maps topology.kubernetes.io/zone
     */
    public function setTopologyKubernetesIoZone(?string $topologyKubernetesIoZone): void
    {
        $this->topologyKubernetesIoZone = $topologyKubernetesIoZone;
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
        if (isset($this->alphaRafayIoClusterName)) {
            $json['alpha.rafay.io/cluster-name']              = $this->alphaRafayIoClusterName;
        }
        if (isset($this->alphaRafayIoInstanceId)) {
            $json['alpha.rafay.io/instance-id']               = $this->alphaRafayIoInstanceId;
        }
        if (isset($this->alphaRafayIoNodegroupName)) {
            $json['alpha.rafay.io/nodegroup-name']            = $this->alphaRafayIoNodegroupName;
        }
        if (isset($this->betaKubernetesIoArch)) {
            $json['beta.kubernetes.io/arch']                  = $this->betaKubernetesIoArch;
        }
        if (isset($this->betaKubernetesIoInstanceType)) {
            $json['beta.kubernetes.io/instance-type']         = $this->betaKubernetesIoInstanceType;
        }
        if (isset($this->betaKubernetesIoOs)) {
            $json['beta.kubernetes.io/os']                    = $this->betaKubernetesIoOs;
        }
        if (isset($this->failureDomainBetaKubernetesIoRegion)) {
            $json['failure-domain.beta.kubernetes.io/region'] = $this->failureDomainBetaKubernetesIoRegion;
        }
        if (isset($this->failureDomainBetaKubernetesIoZone)) {
            $json['failure-domain.beta.kubernetes.io/zone']   = $this->failureDomainBetaKubernetesIoZone;
        }
        if (isset($this->kubernetesIoArch)) {
            $json['kubernetes.io/arch']                       = $this->kubernetesIoArch;
        }
        if (isset($this->kubernetesIoHostname)) {
            $json['kubernetes.io/hostname']                   = $this->kubernetesIoHostname;
        }
        if (isset($this->kubernetesIoOs)) {
            $json['kubernetes.io/os']                         = $this->kubernetesIoOs;
        }
        if (isset($this->nodeLifecycle)) {
            $json['node-lifecycle']                           = $this->nodeLifecycle;
        }
        if (isset($this->nodeKubernetesIoInstanceType)) {
            $json['node.kubernetes.io/instance-type']         = $this->nodeKubernetesIoInstanceType;
        }
        if (isset($this->topologyKubernetesIoRegion)) {
            $json['topology.kubernetes.io/region']            = $this->topologyKubernetesIoRegion;
        }
        if (isset($this->topologyKubernetesIoZone)) {
            $json['topology.kubernetes.io/zone']              = $this->topologyKubernetesIoZone;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
