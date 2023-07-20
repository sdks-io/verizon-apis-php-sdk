<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceOnboardingHelmYamlGitTag;

/**
 * Builder for model ServiceOnboardingHelmYamlGitTag
 *
 * @see ServiceOnboardingHelmYamlGitTag
 */
class ServiceOnboardingHelmYamlGitTagBuilder
{
    /**
     * @var ServiceOnboardingHelmYamlGitTag
     */
    private $instance;

    private function __construct(ServiceOnboardingHelmYamlGitTag $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service onboarding helm yaml git tag Builder object.
     */
    public static function init(string $tagName): self
    {
        return new self(new ServiceOnboardingHelmYamlGitTag($tagName));
    }

    /**
     * Sets values yaml paths field.
     */
    public function valuesYamlPaths(?array $value): self
    {
        $this->instance->setValuesYamlPaths($value);
        return $this;
    }

    /**
     * Initializes a new service onboarding helm yaml git tag object.
     */
    public function build(): ServiceOnboardingHelmYamlGitTag
    {
        return CoreHelper::clone($this->instance);
    }
}
