<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH5sRW9a\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH5sRW9a/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerH5sRW9a.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerH5sRW9a\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerH5sRW9a\App_KernelDevDebugContainer([
    'container.build_hash' => 'H5sRW9a',
    'container.build_id' => 'e381b49e',
    'container.build_time' => 1581524923,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH5sRW9a');