<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZK8qvVi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZK8qvVi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZK8qvVi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZK8qvVi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZK8qvVi\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZK8qvVi',
    'container.build_id' => 'e195379c',
    'container.build_time' => 1619084054,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZK8qvVi');
