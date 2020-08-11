=== Radio Tools ===
Contributors: uiux
Tags: streaming, voscast, audio, radio
Requires at least: 4.0
Tested up to: 5.4.2
Stable tag: 1.0
PHP version: 5.3.0 or greater
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily add a streaming audio player to your site with a shortcode. Easy to customise!

== Description ==
Radio Tools lets you add a streaming audio player, powered by Howler.js, to your site via a shortcode. You can easily customise the player template to unlock the true potential of Howler.js. This is easy for beginners and experts.

Currently it only supports AAC.

### Want to customise your own player?

1. Go to the plugins directory, and copy the template file from ```<plugin_directory>/templates/player.php```
2. Copy player.php into your theme directory, ```<theme_directory>/radiotools/player.php```
3. Edit the player to do what you want, and look how you want!


== Changelog ==

= 1.0 =
**Initial Commit**
- Fixes issues previewing custom fields with ACF #1712
- Fixes some edge cases with Menu Item classes #1709
- Improved efficiency of Post class instantiation #1660

== Screenshots ==

1. This is a basic player, with default styles
2. This is the settings page

== Installation ==

1. Activate the plugin through the 'Plugins' menu in WordPress
2. Add the shortcode to a post, page or sidebar widget etc

```
[radio_tools]
```
3. Make sure you flush permalinks, to ensure the plugins URLs work


That’s it!