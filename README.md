[![Build Status](https://travis-ci.org/fuelphp/app-installer.png?branch=master)](https://travis-ci.org/fuelphp/app-installer)

# Application installer


FuelPHP composer application installer. Aids in automatic installation of FuelPHP applications through Composer.

## Usage

You can use this to install FuelPHP applications using composer. The installer will make sure the composer package containing
your application will be installed in the correct location.

This is an example of an application composer.json file:

````
{
  "name": "fuelphp/demo-application",
    "type": "fuelphp-application",
    "description": "FuelPHP demo application",
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
		"fuelphp/app-installer": "dev-master"
	},
    "minimum-stability": "dev"
}
````

Make sure you use the type "fuelphp-application", and require the installer.

Once this is done, just require your application in your projects main composer.json file
(in the root of your FuelPHP installation) and run a composer update to have it installed.
