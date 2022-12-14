<?php

declare (strict_types=1);
namespace WPSentry\ScopedVendor\PackageVersions;

use WPSentry\ScopedVendor\Composer\InstalledVersions;
use OutOfBoundsException;
\class_exists(\WPSentry\ScopedVendor\Composer\InstalledVersions::class);
/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'stayallive/wp-sentry';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS = array('clue/stream-filter' => 'v1.6.0@d6169430c7731d8509da7aecd0af756a5747b78e', 'composer/installers' => 'v2.1.1@af93ba6e52236418f07a278033eba6959ee5b983', 'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d', 'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da', 'guzzlehttp/psr7' => '1.8.5@337e3ad8e5716c15f9657bd214d16cc5e69df268', 'http-interop/http-factory-guzzle' => '1.1.1@6e1efa1e020bf1c47cf0f13654e8ef9efb1463b3', 'jean85/pretty-package-versions' => '1.6.0@1e0104b46f045868f11942aea058cd7186d6c303', 'php-http/client-common' => '2.5.0@d135751167d57e27c74de674d6a30cef2dc8e054', 'php-http/curl-client' => '2.2.1@2ed4245a817d859dd0c1d51c7078cdb343cf5233', 'php-http/discovery' => '1.14.2@c8d48852fbc052454af42f6de27635ddd916b959', 'php-http/httplug' => '2.3.0@f640739f80dfa1152533976e3c112477f69274eb', 'php-http/message' => '1.13.0@7886e647a30a966a1a8d1dad1845b71ca8678361', 'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1', 'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88', 'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621', 'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be', 'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363', 'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11', 'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822', 'sentry/sentry' => '3.6.0@6d1a6ee29c558be373bfe08d454a3c116c02dd0d', 'symfony/options-resolver' => 'v4.4.37@41d1e741a292574887629369400820c9645e8a87', 'symfony/polyfill-php80' => 'v1.26.0@cfa0ae98841b9e461207c13ab093d76b0fa7bace', 'symfony/polyfill-uuid' => 'v1.26.0@a41886c1c81dc075a09c71fe6db5b9d68c79de23', 'stayallive/wp-sentry' => 'v5.1.0@e697fe5b28ddc014c358e9c0738d95e597e274af');
    private function __construct()
    {
    }
    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }
        return \WPSentry\ScopedVendor\Composer\InstalledVersions::getRootPackage()['name'];
    }
    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName) : string
    {
        if (self::composer2ApiUsable()) {
            return \WPSentry\ScopedVendor\Composer\InstalledVersions::getPrettyVersion($packageName) . '@' . \WPSentry\ScopedVendor\Composer\InstalledVersions::getReference($packageName);
        }
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }
        throw new \OutOfBoundsException('Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files');
    }
    private static function composer2ApiUsable() : bool
    {
        if (!\class_exists(\WPSentry\ScopedVendor\Composer\InstalledVersions::class, \false)) {
            return \false;
        }
        if (\method_exists(\WPSentry\ScopedVendor\Composer\InstalledVersions::class, 'getAllRawData')) {
            $rawData = \WPSentry\ScopedVendor\Composer\InstalledVersions::getAllRawData();
            if (\count($rawData) === 1 && \count($rawData[0]) === 0) {
                return \false;
            }
        } else {
            $rawData = \WPSentry\ScopedVendor\Composer\InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return \false;
            }
        }
        return \true;
    }
}
