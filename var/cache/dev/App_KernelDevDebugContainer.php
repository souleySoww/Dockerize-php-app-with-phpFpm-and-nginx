<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEP8wRD7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEP8wRD7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEP8wRD7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEP8wRD7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEP8wRD7\App_KernelDevDebugContainer([
    'container.build_hash' => 'EP8wRD7',
    'container.build_id' => 'e2409699',
    'container.build_time' => 1708802089,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEP8wRD7');
