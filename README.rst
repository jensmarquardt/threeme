========================================================================================================================
Threeme Distribution
========================================================================================================================


About the distribution
------------------------------

Threeme is free and our contribution to the TYPO3 community.
The distribution is not supposed to compete with other template concepts and
extensions such as "Themes" or the "Bootstrap Package", it pursues a completely different philosophy:

Threeme is aimed at experienced front-end developers who already know TYPO3, but also for those who want to become one.
It offers a preconfigured TYPO3 distribution, which does not want to create universal requirements,
but offers strong defaults in a flexible structure in order to efficiently implement complex individual programming.

Threeme works standalone to minimize security risks and dependencies to third-party extensions.
However, it provides configurations and examples for the extensions Mask, News, Powermail and RealUrl.

Hint
------------------------------
**The version 3.0.0 will be the first for public usage**
All versions **below** 3.0.0 are beta and strongly in development!


========================================================================================================================
Target groups
========================================================================================================================

Front-end developer
------------------------------

The front-end developer gets a unified, clear structure that provides orientation and quick access
to the design of website and content as well as the configuration of TYPO3.

If possible, only Fluid and SASS will be used, TypoScript will be avoided by a Constants set.
Templates for "standard" extensions and examples for the integration of new elements and content complete the picture.
These strong defaults avoid constantly reinventing the wheel, so that more time for the implementation of complex requirements remains.

Aim: The developer should be able to concentrate on the implementation of the design and not on TYPO3.

TYPO3 (certified) Integrator
------------------------------

The Backend is optimized according to a well thought-out scheme: It is reduced to essential features and options.
Instructions and examples for integrators, as well as a customer or editor, enable individual adaptations and targeted editorial work.

Aim: The integrator always retains full control over the backend and provides work facilities for his client and editors.

Editors
------------------------------

The functions provided by the integrator focus on the daily work of the (chief) editors and their handling of TYPO3:
Entry barriers are reduced, the learning curve flattened, the user experience with the CMS TYPO3 increased.


========================================================================================================================
Installation
========================================================================================================================

Threeme is designed in such a way that it works without additional extensions.
If you do not want to use the following extensions, some empty contents will remain in the page tree. This mainly refers to the extension Mask.

Since Threeme is a TYPO3 distribution, it brings a preconfigured page tree, image and text files as well as some content of the extensions News, Mask and Powermail.
Also for RealURL there is a minimal configuration, which can be used.

The distribution works with SASS instead of pure CSS, so the SCSS can be compiled directly on the server using the extension WS_SCSS.
If you prefer to keep the full control, a config.rb can be used for compiling via SASS or Compass.

**Read about preparation first, then simply install Threeme by the Extension Manager**

Preparation
------------------------------

You should have a fresh TYPO3 installation available. It is enough, if you created an Admin account and threeme loaded from the TER.

As described above, Threeme also creates user and user groups, as well as the records and contents of the extensions mentioned above,
along with the pagetree and the necessary files under fileadmin/threeme. If you want to install the pre-built content of the optional extensions,
you should have these extensions loaded and installed via the TER:

* RealURL v2.0.15
* News v5.2.0
* Mask v2.1.1
* Powermail v3.7.0

For the following system extensions, Threeme also provides TypoScript, Fluid, and SASS configurations.
Activate first, then install Threeme.

* Fluid Styled Content
* Scheduler
* Internal Notes
* Frontend Login
* Indexed Search

Extension Mask
------------------------------

Before Threeme is installed, the paths to its Mask configuration must be known.
This could be done in the Extension Manager or directly via the Backend module of Mask.
The following paths have to be set:

* Config: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Config/mask.json
* Backend: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/
* Preview: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Preview/
* Frontend: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/

Extension RealURL
------------------------------

If you want to get your RealURL configuration from Threeme,
you can add the following in the Extension Manager to RealURL:

* Configuration path: typo3conf/ext/threeme/Resources/Private/Php/Extensions/Realurl/Configuration.php


========================================================================================================================
Installation successful? I have a Threeme
========================================================================================================================

threeme.de
---------

More resources and a complete documentation in german language under www.threeme.de

Community
---------

Be cordially invited to participate actively in the further development.
Issues should be sent to the appropriate extension on github:

* `TYPO3-THREEME on Github <https://github.com/AstCommodore/threeme>`_
