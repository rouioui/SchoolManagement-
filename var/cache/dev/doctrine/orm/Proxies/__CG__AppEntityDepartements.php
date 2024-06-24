<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Departements extends \App\Entity\Departements implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'chefDepartement' => [parent::class, 'chefDepartement', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'enseignants' => [parent::class, 'enseignants', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'images' => [parent::class, 'images', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        'chefDepartement' => [parent::class, 'chefDepartement', null],
        'description' => [parent::class, 'description', null],
        'enseignants' => [parent::class, 'enseignants', null],
        'id' => [parent::class, 'id', null],
        'images' => [parent::class, 'images', null],
        'name' => [parent::class, 'name', null],
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
