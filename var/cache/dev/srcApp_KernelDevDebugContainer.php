<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRmeVqyV\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRmeVqyV/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRmeVqyV.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRmeVqyV\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRmeVqyV\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RmeVqyV',
    'container.build_id' => '6ad1273a',
    'container.build_time' => 1564276452,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRmeVqyV');
