<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUwngzjp\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUwngzjp/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerUwngzjp.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerUwngzjp\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerUwngzjp\App_KernelProdContainer([
    'container.build_hash' => 'Uwngzjp',
    'container.build_id' => 'bc19964e',
    'container.build_time' => 1684231990,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUwngzjp');
