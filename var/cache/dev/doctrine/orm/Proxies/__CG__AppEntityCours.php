<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cours extends \App\Entity\Cours implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'Departement' => [parent::class, 'Departement', null],
        "\0".parent::class."\0".'Enseignant' => [parent::class, 'Enseignant', null],
        "\0".parent::class."\0".'active' => [parent::class, 'active', null],
        "\0".parent::class."\0".'coeffictient' => [parent::class, 'coeffictient', null],
        "\0".parent::class."\0".'createdAt' => [parent::class, 'createdAt', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nomCour' => [parent::class, 'nomCour', null],
        "\0".parent::class."\0".'notes' => [parent::class, 'notes', null],
        "\0".parent::class."\0".'updatedAt' => [parent::class, 'updatedAt', null],
        'Departement' => [parent::class, 'Departement', null],
        'Enseignant' => [parent::class, 'Enseignant', null],
        'active' => [parent::class, 'active', null],
        'coeffictient' => [parent::class, 'coeffictient', null],
        'createdAt' => [parent::class, 'createdAt', null],
        'id' => [parent::class, 'id', null],
        'nomCour' => [parent::class, 'nomCour', null],
        'notes' => [parent::class, 'notes', null],
        'updatedAt' => [parent::class, 'updatedAt', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
