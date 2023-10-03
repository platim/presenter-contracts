<?php

declare(strict_types=1);

namespace Platim\Presenter\Contracts\Metadata;

interface MetadataRegistryInterface
{
    public function getMetadataForClass(string $class): ?MetadataInterface;
}
