<?php declare(strict_types=1);

namespace Krok\Asset\Installers;

use Composer\Installer\LibraryInstaller;
use Composer\Installers\Installer as InstallerBase;
use Composer\Package\PackageInterface;

/**
 * Class Installer
 *
 * @package Krok\Asset\Installers
 */
class Installer extends InstallerBase
{
    /**
     * @var array
     */
    protected $packageTypes = [
        'bower-asset',
        'npm-asset',
    ];

    /**
     * @param PackageInterface $package
     *
     * @return string
     */
    public function getInstallPath(PackageInterface $package): string
    {
        $installer = new AssetInstaller($package, $this->composer, $this->io);
        $path = $installer->getInstallPath($package, $package->getType());

        return $path ?: LibraryInstaller::getInstallPath($package);
    }

    /**
     * @param string $packageType
     *
     * @return bool
     */
    public function supports($packageType): bool
    {
        return in_array($packageType, $this->packageTypes);
    }
}
