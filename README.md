# German Extension for [Flarum](http://flarum.org/)

Extension to localize the Flarum forum software and its official extensions into German.

- [Informations](https://github.com/Yggdrasil-Dono/Flarum-de#informations)
	- [Version](https://github.com/Yggdrasil-Dono/Flarum-de#version)
	- [Compatibility](https://github.com/Yggdrasil-Dono/Flarum-de#compatibility)
	- [License](https://github.com/Yggdrasil-Dono/Flarum-de#license)
- [Downloads](https://github.com/Yggdrasil-Dono/Flarum-de#downloads)
	- [Latest German Extension Release](https://github.com/Yggdrasil-Dono/Flarum-de#latest-german-extension-release)
	- [Latest German Extension Development Version](https://github.com/Yggdrasil-Dono/Flarum-de#latest-german-development-version)
- [Documentation](https://github.com/Yggdrasil-Dono/Flarum-de#documentation)
	- [How to install?](https://github.com/Yggdrasil-Dono/Flarum-de#how-to-install)
	- [How to update?](https://github.com/Yggdrasil-Dono/Flarum-de#how-to-update)
- [Contributing](https://github.com/Yggdrasil-Dono/Flarum-de#contributing)

## Informations

### Version

- 0.1.0-dev (Build 1)
- Released on September 20, 2015

### Compatibility

- [Flarum](https://github.com/flarum/core) (Core) 0.1.0 Beta 2
	- [Likes](https://github.com/flarum/likes) 0.1.0 Beta 2
	- [Lock](https://github.com/flarum/lock) 0.1.0 Beta 2
	- [Mentions](https://github.com/flarum/mentions) 0.1.0 Beta 2
	- [Pusher](https://github.com/flarum/pusher) 0.1.0 Beta 2
	- [Reports](https://github.com/flarum/reports) 0.1.0 Beta 2
	- [Sticky](https://github.com/flarum/sticky) 0.1.0 Beta 2
	- [Subscriptions](https://github.com/flarum/subscriptions) 0.1.0 Beta 2
	- [Tags](https://github.com/flarum/tags) 0.1.0 Beta 2

### License

Released under the MIT License. Please see the [LICENSE](https://github.com/Yggdrasil-dono/flarum/blob/master/LICENSE) file.

## Downloads

### [Latest German Extension Release]

This release is recommended because it is guaranteed to be compatible with Flarum 0.1.0 Beta 2 and its related extensions, which are the current latest releases.

### [Latest German Extension Development Version]

This release may be incompatible with the current releases, based on latest development versions of the software and its supported extensions. It is available for testing purposes to developers or advanced and inquisitive users. Use it at your own risk!

## Documentation

### How to install?

Once the compressed extension downloaded, extract the archive with a [file archiver](https://en.wikipedia.org/wiki/Comparison_of_file_archivers).

Using [FTP](http://en.wikipedia.org/wiki/File_Transfer_Protocol), browse into your Flarum root (which contains the *config.php* file). You will see an *extensions/* directory. Inside this directory, create a *german/* directory. Then, upload the content of the previous extracted archive inside the *german/* directory.

The extension is now uploaded to your server and your next step is to enable it. Log-in to your forum and click on your username located at the top right of the screen. You will see a pop-up. Click on the *Administration* link. Once in the administration page, click on *Extensions*. You will see a list of all your extensions. Note that the German extension is the grey tinted one, with a white icon of the Earth and a blue background. Hover the extension and notice the dotted vertical menu. Click on that vertical menu and click on *Enable*.

Your extension is now enabled. Congratulations! You, and your users, can now select the language via a dropdown menu located in the header, at the right of the search box.

### How to update?

Like the installation process, download the updated compressed extension and extract the archive. Then, using [FTP](http://en.wikipedia.org/wiki/File_Transfer_Protocol), browse into the extension root at the *extensions/german/* directory. Inside this directory, delete all the current content and upload the new files from the previous extracted archive.

Your extension files are now updated, but you have to force the cache of your forum to refresh. To do that, using [FTP](http://en.wikipedia.org/wiki/File_Transfer_Protocol), locate the *assets/* directory. Inside the directory, delete the *forum-de-XYZ.js* and *admin-de-XYZ.js* files (*XYZ* are some random generated letters and numbers). You can now enjoy the latest improvements and fixes of the updated extension!

## Contributing

Thank you a lot to wish to contribute. It means a lot. Using and enjoying the localization is already a huge support. Best other ways to contribute are, among other things:

- Star on GitHub. Because if you use it and like it, you can at least be a stargazer!
- Follow on GitHub. You'll be notified in real time of all changes. No more misses!
- Open [issues](https://github.com/Yggdrasil-dono/Flarum-de/issues) on GitHub. Because the localization will be better with your feedbacks.
- Open pull requests on GitHub. Submit fixes and improvements and be listed as [contributor](https://github.com/Yggdrasil-dono/Flarum-de/graphs/contributors) !
