<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPeeERyC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPeeERyC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPeeERyC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPeeERyC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPeeERyC\App_KernelDevDebugContainer([
    'container.build_hash' => 'PeeERyC',
    'container.build_id' => '68733749',
    'container.build_time' => 1681460440,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPeeERyC');
