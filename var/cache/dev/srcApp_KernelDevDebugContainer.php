<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAKKoJms\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAKKoJms/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAKKoJms.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAKKoJms\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerAKKoJms\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'AKKoJms',
    'container.build_id' => '6f340321',
    'container.build_time' => 1564439760,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAKKoJms');
