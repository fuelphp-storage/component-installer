<?php
/**
 * Part of the FuelPHP framework.
 *
 * @package    FuelPHP\Foundation
 * @version    2.0
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 */

namespace Fuel\ApplicationInstaller;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

/**
 * Installer
 *
 * Custom composer installer to make sure app's end up in ./application
 *
 * @package  Fuel\ApplicationInstaller
 *
 * @since  2.0.0
 */
class Installer extends LibraryInstaller
{
	/**
	 * {@inheritDoc}
	 */
	public function getInstallPath(PackageInterface $package)
	{
		// strip the repo name off it if it's present
		$name = $package->getPrettyName();
		strpos($name, '/') !== false and $name = ltrim(strrchr($name, '/'), '/');

		// strip the fuelphp prefix if present
		strpos($name, 'fuelphp-') === 0 and $name = substr($name, 8);

		// strip the application suffix if present
		$pos = strpos($name, '-application');
		$pos !== false and $name = substr($name, 0, $pos);

		// and install the application in the application folder...
		return 'apps/'.$name;
	}

	/**
	 * {@inheritDoc}
	 */
	public function supports($packageType)
	{
		return 'fuelphp-application' === $packageType;
	}
}
