<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMiq77jj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMiq77jj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMiq77jj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMiq77jj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMiq77jj\App_KernelDevDebugContainer([
    'container.build_hash' => 'Miq77jj',
    'container.build_id' => '335207bb',
    'container.build_time' => 1618039252,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMiq77jj');
