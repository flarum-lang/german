# German Language Pack for [Flarum](https://flarum.org/)

Extension to localize the Flarum forum software and its official extensions into German. For support, please use the discussion thread on the [Flarum support forum](https://discuss.flarum.org/d/2648-german-language-pack), or use the issue tracker here on GitHub.

You can find the German language pack for **third-party extensions** in [this repository](https://github.com/Kakifrucht/flarum-de-extended).

- [Information](#information)
  - [Version](#version)
  - [Compatibility](#compatibility)
  - [License](#license)
- [Documentation](#documentation)
  - [How to install](#how-to-install)
  - [How to update](#how-to-update)

## Information

### Version

- 0.14.1
- Released on January 26, 2021

### Compatibility

- [Flarum](https://github.com/flarum/core) (Core v0.1.0-beta.15)
  - [Akismet](https://github.com/flarum/flarum-ext-akismet)
  - [Approval](https://github.com/flarum/flarum-ext-approval)
  - [Emoji](https://github.com/flarum/emoji)
  - [Flags](https://github.com/flarum/flags)
  - [Likes](https://github.com/flarum/likes)
  - [Lock](https://github.com/flarum/lock)
  - [Markdown](https://github.com/flarum/markdown)
  - [Mentions](https://github.com/flarum/mentions)
  - [Nicknames](https://github.com/flarum/nicknames)
  - [Pusher](https://github.com/flarum/pusher)
  - [Statistics](https://github.com/flarum/statistics)
  - [Sticky](https://github.com/flarum/sticky)
  - [Subscriptions](https://github.com/flarum/subscriptions)
  - [Suspend](https://github.com/flarum/suspend)
  - [Tags](https://github.com/flarum/tags)

### License

Released under the MIT License. Please see the [LICENSE](LICENSE) file.

## Documentation

### How to install

Use Composer in the root directory of your forum:

```text
composer require kakifrucht/flarum-de
```

See also on [Packagist](https://packagist.org/packages/kakifrucht/flarum-de).

### How to update

Execute these commands in the root directory of your forum:

```text
composer update kakifrucht/flarum-de
php flarum cache:clear
```
