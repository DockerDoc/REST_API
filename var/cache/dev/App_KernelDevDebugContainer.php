<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBuklub4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBuklub4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBuklub4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBuklub4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBuklub4\App_KernelDevDebugContainer([
    'container.build_hash' => 'Buklub4',
    'container.build_id' => '002414fe',
    'container.build_time' => 1606077819,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBuklub4');
