<?php

declare(strict_types=1);

/*
 * VerizonThingSpaceQualityOfServiceAPIEndpointsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonThingSpaceQualityOfServiceAPIEndpointsLib;

use CoreInterfaces\Http\HttpConfigurations;
use VerizonThingSpaceQualityOfServiceAPIEndpointsLib\Authentication\ThingspaceOauthCredentials;
use VerizonThingSpaceQualityOfServiceAPIEndpointsLib\Authentication\ThingspaceOauthCredentialsBuilder;
use VerizonThingSpaceQualityOfServiceAPIEndpointsLib\Authentication\VzM2mSessionTokenCredentials;
use VerizonThingSpaceQualityOfServiceAPIEndpointsLib\Authentication\VzM2mSessionTokenCredentialsBuilder;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get the VZ-M2M session token from [Getting Started](/content/thingspace-
     *
     * * portal/documentation/apis/connectivity-management/get-started.html)
     */
    public function getVZM2MToken2(): string;

    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get the credentials to use with ThingspaceOauth
     */
    public function getThingspaceOauthCredentials(): ThingspaceOauthCredentials;

    /**
     * Get the credentials builder instance to update credentials for ThingspaceOauth
     */
    public function getThingspaceOauthCredentialsBuilder(): ?ThingspaceOauthCredentialsBuilder;

    /**
     * Get the credentials to use with VzM2mSessionToken
     */
    public function getVzM2mSessionTokenCredentials(): VzM2mSessionTokenCredentials;

    /**
     * Get the credentials builder instance to update credentials for VzM2mSessionToken
     */
    public function getVzM2mSessionTokenCredentialsBuilder(): ?VzM2mSessionTokenCredentialsBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::THINGSPACE): string;
}
