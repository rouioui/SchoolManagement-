<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRKNEQR0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRKNEQR0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRKNEQR0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRKNEQR0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRKNEQR0\App_KernelDevDebugContainer([
    'container.build_hash' => 'RKNEQR0',
    'container.build_id' => 'ae6287d3',
    'container.build_time' => 1716746189,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRKNEQR0');
