[![Build Status](https://travis-ci.org/fuelphp/component-installer.png?branch=master)](https://travis-ci.org/fuelphp/component-installer)

# Component installer


FuelPHP composer application component installer. Aids in automatic installation of FuelPHP application components through Composer.

## Usage

You can use this to install FuelPHP application components using composer. The installer will make sure the composer package containing
your application component will be installed in the correct location.

This is an example of an application composer.json file:

````
{
  "name": "fuelphp/demo-component",
    "type": "fuelphp-component",
    "description": "FuelPHP demo component",
    "keywords": ["framework"],
    "homepage": "http://fuelphp.com",
    "license": "MIT",
	"authors": [
		{
			"name": "FuelPHP Development Team",
			"email": "team@fuelphp.com"
		}
	],
	"require": {
		"php": ">=5.4",
		"fuelphp/component-installer": "dev-master"
	},
    "minimum-stability": "dev"
}
````

Make sure you use the type "fuelphp-component", and require the installer.

Once this is done, just require your application component in your projects main composer.json file
(in the root of your FuelPHP installation) and run a composer update to have it installed.
