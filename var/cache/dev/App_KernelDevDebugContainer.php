<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container23oLSu9\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container23oLSu9/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container23oLSu9.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container23oLSu9\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container23oLSu9\App_KernelDevDebugContainer([
    'container.build_hash' => '23oLSu9',
    'container.build_id' => '53bf1ae8',
    'container.build_time' => 1680178271,
], __DIR__.\DIRECTORY_SEPARATOR.'Container23oLSu9');
