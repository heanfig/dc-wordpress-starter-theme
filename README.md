# DC Hall of Justice Starter Theme

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

[![Build Status](https://i.imgur.com/89oeoAE.png)](https://travis-ci.org/joemccann/dillinger)

It is a base topic for the presentation of a technical test for senior developers wordpress for blankfactor

# Changelog

  - Add Custom post Types

# Features

- Visual GUI editor for shortcodes
- Before
- [![Build Status](https://i.imgur.com/50T6VdC.png)](https://i.imgur.com/50T6VdC.png)
- After
- [![Build Status](https://i.imgur.com/GNJIfpe.png)](https://i.imgur.com/GNJIfpe.png)
- AJAX Support
- Templates Pages Wordpress
- Custom post types
- WP Query Support

# Shortcodes

## [dc_character_filter]
List All Character Types:
#### "character_title" => Show Title (Text)
#### "character_subtitle" => Show Subtitle (Text)
#### "character_type" => Filter characters by type
#### "type_filter" => Open Filters (AJAX MODE)

## [dc_carousel]
#### "gallery_items" => show max limit
#### "show_overlay" => Show overlay

# Plugin: DC Core

Contains Base plugin to manage filter of characters(contains shortcodes)

It contains the plugin that adds the 2 shortcodes:
The carousel shortcode
The element filter shortvode

# Preserve Theme customization

The theme configuration is preserved in such a way that you can change the logo, add menus and preserve the characteristics of the theme as such.

# Thid Party (Plugins Required) (Included in TGMPA Engine)

- Wordpress Importer
- Backery Visual Composer (IMPORTANT for shortcodes)
- Clasic Editor, Disables guttember editor

# Playground in live mode

http://li1536-186.members.linode.com/dc/

Worpress:
http://li1536-186.members.linode.com/dc/wp-login.php

**user**: root

**pwd**: root

# Technologies Using
uses a number of open source projects to work properly:

* [TGMPA](http://tgmpluginactivation.com/) - Wordpress Framework Engine for create one click theme install from Envato themeforest
* [Twitter Bootstrap](https://getbootstrap.com/) - great UI boilerplate for modern web apps
* [Visual Composer API](https://visualcomposer.com/) - Wordpress Framework to add flavors to shortcodes, visual GUI interface
* [SASS] - css with superpowers
* [jQuery] - ...
* [underscores.me] Starter theme development

### Installation Instructions 

- Download theme from **Releases tab** or download this repo (with folder)
https://github.com/heanfig/dc-wordpress-starter-theme/releases/download/1.0/dc-theme.zip

Release: https://github.com/heanfig/dc-wordpress-starter-theme/releases/tag/1.0

- Upload Theme from Wordpres:
[![Build Status](https://i.imgur.com/xaUWi3O.png)](https://travis-ci.org/joemccann/dillinger)

- Activate theme called **dc**. looks like
[![Build Status](https://i.imgur.com/hlBA3MK.png)](https://travis-ci.org/joemccann/dillinger)

- Install **all Required Plugins** (powered by TGMPA Activation), this plugins are necesary for the site looks great :-)
[![Build Status](https://i.imgur.com/MsGI7Hz.png)](https://travis-ci.org/joemccann/dillinger)

- Install All Plugins
[![Build Status](https://i.imgur.com/VKcdOli.png)](https://travis-ci.org/joemccann/dillinger)

- Font forget activate plugins after instalation
[![Build Status](https://i.imgur.com/FscbWTT.pngg)](https://travis-ci.org/joemccann/dillinger)
[![Build Status](https://i.imgur.com/Vi5Z1EC.png)](https://travis-ci.org/joemccann/dillinger)

- **Upload dummy data** Download dummy data (sent by email) and upload XML using Wordpress Importer Plugin

- [![Build Status](https://i.imgur.com/Vmxdher.png)](https://travis-ci.org/joemccann/dillinger)

- **Wordpress importer** Select Wordpress Option from importer

- [![Build Status](https://i.imgur.com/5XwibCE.png)](https://i.imgur.com/5XwibCE.png)
- 
- **Wordpress importer** Select XML file to import

- [![Build Status](https://i.imgur.com/xTfikez.png)](https://i.imgur.com/xTfikez.png)

- **Import Process (IMPORTANT)** check option download attachments for major experience in this playground the author field is optional

- **NOTE:** import files and content only after activating all plugins and theme

- [![Build Status](https://i.imgur.com/gzl1sz0.png)](https://i.imgur.com/xTfikez.png)

- view inicio page
- [![Build Status](https://i.imgur.com/LEkPXAO.png)](https://i.imgur.com/LEkPXAO.png)


### TODOS

 - Write more README
 - Add Docs for playground

License
----

MIT

**Free Software, Hell Yeah!**

### Develop This Theme

To start using all the tools that come with `_s`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `language/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
