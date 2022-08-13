<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lexik_jwt_authentication', [
        'private_key_path' => '%kernel.project_dir%/%env(JWT_PRIVATE_KEY_PATH)%',
        'public_key_path' => '%kernel.project_dir%/%env(JWT_PUBLIC_KEY_PATH)%',
        'pass_phrase' => '%env(JWT_PASSPHRASE)%',
    ]);
};
