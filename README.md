# Amadeco GalleryExtras Module for Magento 2

[![Latest Stable Version](https://img.shields.io/github/v/release/Amadeco/module-gallery-extras)](https://github.com/Amadeco/module-gallery-extras/releases)
[![Magento 2](https://img.shields.io/badge/Magento-2.4.x-brightgreen.svg)](https://magento.com)
[![PHP](https://img.shields.io/badge/PHP-8.1|8.2|8.3-blue.svg)](https://www.php.net)
[![License](https://img.shields.io/github/license/Amadeco/module-gallery-extras)](https://github.com/Amadeco/module-gallery-extras/blob/main/LICENSE)

[SPONSOR: Amadeco](https://www.amadeco.fr)

## Overview

The Amadeco GalleryExtras module enriches your Magento store by extending the native Fotorama Product Gallery. Born from the desire to overcome Magento’s limitations, this module breathes new life into your gallery by adding custom parameters that allow you to control the stage container dimensions with finesse and precision.

## Features

- **Enhanced Gallery Options**: Seamlessly inject extra parameters into Fotorama options:
  - **minwidth**: Sets the minimum width of the stage container in pixels or percentages.
  - **maxwidth**: Sets the maximum width of the stage container in pixels or percentages.
  - **minheight**: Sets the minimum height of the stage container in pixels or percentages.
  - **maxheight**: Sets the maximum height of the stage container in pixels or percentages.
- **Precision & Flexibility**: Fine-tune your product gallery’s presentation beyond the native Magento limitations.
- **Smooth Integration**: Automatically extends Magento's GalleryOptions without disrupting your theme's design.

## Installation

### Composer Installation

Execute the following commands in your Magento root directory:

```bash
composer require amadeco/module-gallery-extras
bin/magento module:enable Amadeco_GalleryExtras
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy
```

### Manual Installation

1. Create directory `app/code/Amadeco/GalleryExtras` in your Magento installation
2. Clone or download this repository into that directory
3. Enable the module and update the database:

```bash
bin/magento module:enable Amadeco_GalleryExtras
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy
```

## Usage

Once installed, the GalleryExtras module automatically extends the Fotorama gallery options with the following new parameters (defined in theme etc/view.xml file):

- **minwidth**: Stage container minimum width.
- **maxwidth**: Stage container maximum width.
- **minheight**: Stage container minimum height.
- **maxheight**: Stage container maximum height.

Note: Magento’s default view.xml does not support these options. GalleryExtras elegantly fills this gap by injecting these parameters at runtime, giving you unparalleled control over your product gallery’s layout.

## Compatibility

- Magento 2.4.x
- PHP 8.1, 8.2, 8.3

## Contributing

Contributions are welcome! Please read our [Contributing Guidelines](CONTRIBUTING.md).

## Support

For issues or feature requests, please create an issue on our GitHub repository.

## License

This module is licensed under the Open Software License ("OSL") v3.0. See the [LICENSE.txt](LICENSE.txt) file for details.
