<?php

declare(strict_types=1);

namespace Phpolar\ModelResolver;

/**
 * Unifies implementations that create models from method arguments.
 */
interface ModelResolverInterface
{
    /**
     * Use to create a map of models from method arguments.
     *
     * @param object $it The object with one or more models as method arguments
     * @param string $methodName The method name containing model arguments
     * @return array<string,object> A map of models
     */
    public function resolve(object $it, string $methodName): array;
}
