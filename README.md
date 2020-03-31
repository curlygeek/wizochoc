# Wizochoc SEO enhancements for SilverStripe

This module adds some basic SEO treats to SilverStripe

- Google Tag Manager

## Requirements

* SilverStripe 4.0.0 or above
* PHP 5.6 or above

## Installation
Use composer to install the module. 

```
composer require honeydukes/wizochoc
```


## License
See [License](license.md)


## Documentation


## Example configuration
To enable Wizochoc, add the following into a config yaml file (e.g. /app/_config/extensions.yml):

```yaml

Silverstripe\SiteConfig\SiteConfig:
  extensions:
    - Honeydukes\Wizochoc\Extensions\SiteConfigExtension
  
```

## Maintainers
 * Josephine Fahy - [https://github.com/curlygeek] (https://github.com/curlygeek)
 
## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over 
existing issues to ensure yours is unique. 
 
If the issue does look like a new bug:
 
 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots 
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, 
 Operating System, any installed SilverStripe modules.
 
Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.
 
## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.
