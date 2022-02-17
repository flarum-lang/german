# German Language Pack for [Flarum](https://flarum.org/)

Extension to localize the Flarum forum software and its official and third-party extensions into German. For support, please use the discussion thread on the [Flarum support forum](https://discuss.flarum.org/d/2648-german-language-pack), or use the issue tracker here on GitHub.

- [Installation](#installation)
- [Updating](#updating)
- [Contributing](#contributing)
- [Compatibility](#compatibility)
  - [Core](#core)
  - [Extensions](#extensions)
- [License](#license)
- [Documentation](#documentation)

## Installation

Use Composer in the root directory of your forum:

```text
composer require flarum-lang/german
```

See also on [Packagist](https://packagist.org/packages/flarum-lang/german).

## Updating

Execute these commands in the root directory of your forum:

```text
composer update flarum-lang/german
php flarum cache:clear
```

## Contributing

All translations are managed on this [Weblate instance](https://weblate.rob006.net/engage/flarum/de/), no coding skills or Git knowledge is required to contribute. Flarum internal strings are handled in the 'core' component, otherwise select the extension you want to translate. You can use the search function on a components page to quickly find specific strings you wish to translate or update.

Additions and improvements to the translations are very welcome, all help is greatly appreciated!

Note: To get your GitHub account linked in the commits on this repository, use an email that's associated with your GitHub account during Weblate signup.

## Compatibility

### Core

| Component | Status |
| --- | --- |
| [`core`](https://github.com/flarum/core) | [![Translation status](https://weblate.rob006.net/widgets/flarum/de/core/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/core/de/) |
| `validation` | [![Translation status](https://weblate.rob006.net/widgets/flarum/de/validation/svg-badge.svg)](https://weblate.rob006.net/projects/flarum/validation/de/) |

### Extensions

We always fully support all offically bundled Flarum extensions.

<!-- all-extensions-list-start --><!-- all-extensions-list-stop -->

## License

Released under the MIT License. Please see the [LICENSE](LICENSE) file.
