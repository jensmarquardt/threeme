## Threeme Change-Log


### 2017-01-13  Version 3.0.0

* [TASK] Initial upload stable version 3.0.0

### 2017-01-19  Version 3.0.1

* [TASK] Updated composer
* [DOC] Cleaned out readme file
* [DOC] Added ChangeLog file
* [STYLE] Changed indexed search browsebox to inline list

### 2017-01-26  Version 3.0.2
* [FIX] Fixed broken suggestions in composer.json 
* [REFACTOR] Changed TypoScript to .ts for better IDE support
* [TASK] Minor changes to data.t3d file

### 2017-02-13  Version 3.0.3
* [TASK] Updated pagePath setup in RealURL config
* [TASK] Cleaned out .gitignore file
* [REFACTOR] Minor changes to composer.json
* [REFACTOR] Mapped composer.json to ext_emconf.php
* [FEATURE] Added support for extension "min"
* [REFACTOR] Moved jQuery from includeFooter to includeFooterLibs
* [FEATURE] Added removePageCss to constants set and config

### 2017-03-01  Version 3.1.0
* [FEATURE] Added ascii spam protection to constants set and config
* [FEATURE] Changed removeDefaultJS to 1 because of ascii spam protection 
* [REFACTOR] Removed unused Bootstrap SASS partials
* [TASK] Changed FLUID namespace declaration to modern xmlns
* [TASK] Enabled smoothScroll by generic class threeme-ui-scroll instead of binding to threeme-ui-totop
* [REFACTOR] Positioned screen-xs condition at end of type.scss
* [TASK] Improved pagetree and RealURL configuration
* [FEATURE] Added additionalBodyAttribute to constants set and bodyTagCObject
* [FEATURE] Added TCA field 'css' as new option for cType header
* [TASK] Improved use of additional CSS classes for cType header 
* [TASK] Improved usergroup configuration
* [FEATURE] Improved carousel animation / CSS transition
* [TASK] Used userFunc condition to auto-include TypoScript of 3rd party EXTs 
* [FEATURE] Added new TypoScript lib 'threemeWatermarkedImage' as alternative image rendering option
* [REFACTOR] Added wrapper classes for field 'layout' of cType image

### 2017-04-13  Version 3.1.1
* [FIX] Minor changes to news + realurl configuration, deactivated hrdate to respect news sitemap
* [FEATURE] Added canonical tag to headerData.ts
* [FEATURE] Added sitename and favicon to constants set
* [DOC] Minor changes to the readme and comments in constants.txt and page.ts
* [REFACTOR] Optimized file size for login background image by Guetzli
* [DOC] Minor changes to doc and comments
* [FEATURE] Updated EXT:Powermail to version 3.15.0
* [FEATURE] Updated EXT:Min 1.3
* [FIX] Added condition to hide hidden MASK records in BE

### 2017-04-18  Version 3.1.2
* [STYLE] Added distribution preview images
* [STYLE] Improved ext_icon.svg
* [FIX] Improved ext_emconf.php
* [DOC] Improved documentation pagetree in data.t3d

### 2017-0  Version 4.0.0
