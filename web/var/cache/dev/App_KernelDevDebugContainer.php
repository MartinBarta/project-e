<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC1DinhO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC1DinhO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerC1DinhO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerC1DinhO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerC1DinhO\App_KernelDevDebugContainer([
    'container.build_hash' => 'C1DinhO',
    'container.build_id' => 'ab22f9cf',
    'container.build_time' => 1663668611,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC1DinhO');
