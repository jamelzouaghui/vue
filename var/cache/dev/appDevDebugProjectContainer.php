<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6cxt33l\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6cxt33l/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container6cxt33l.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container6cxt33l\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container6cxt33l\appDevDebugProjectContainer([
    'container.build_hash' => '6cxt33l',
    'container.build_id' => 'e0f0d112',
    'container.build_time' => 1553864351,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6cxt33l');
