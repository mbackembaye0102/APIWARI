<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY4mV8TW\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY4mV8TW/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY4mV8TW.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY4mV8TW\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerY4mV8TW\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Y4mV8TW',
    'container.build_id' => 'e9d425d0',
    'container.build_time' => 1564160528,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY4mV8TW');
