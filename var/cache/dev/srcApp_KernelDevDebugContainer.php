<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMGknFqx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMGknFqx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMGknFqx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMGknFqx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerMGknFqx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'MGknFqx',
    'container.build_id' => '419200fc',
    'container.build_time' => 1574082413,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMGknFqx');
