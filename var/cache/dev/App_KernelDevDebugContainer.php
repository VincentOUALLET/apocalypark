<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIFANvpA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIFANvpA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIFANvpA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIFANvpA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIFANvpA\App_KernelDevDebugContainer([
    'container.build_hash' => 'IFANvpA',
    'container.build_id' => 'ed7e17fd',
    'container.build_time' => 1599142784,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIFANvpA');