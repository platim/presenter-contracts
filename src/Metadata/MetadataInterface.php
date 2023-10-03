<?php

declare(strict_types=1);

namespace Platim\Presenter\Contracts\Metadata;

interface MetadataInterface
{
    /**
     * @return string[]
     */
    public function getFieldNames(): array;

    /**
     * @return string[]
     */
    public function getAssociationNames(): array;

    public function hasAssociation(string $name): bool;

    public function isAssociationMultiple(string $name): bool;

    public function getAssociationValueAsArray(mixed $value): array;
}
