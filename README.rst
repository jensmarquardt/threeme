========================================================================================================================
Threeme Distribution
========================================================================================================================

About the distribution
----------------------

Threeme is free and our contribution to the TYPO3 community.
The distribution is not supposed to compete with other templating concepts and
extensions such as "Themes" or the "Bootstrap Package", it pursues a completely different philosophy:

Threeme is aimed at experienced frontend developers who already know TYPO3, but also for those who want to become one.
It offers a preconfigured TYPO3 distribution, which does not want to create universal requirements,
but offers strong defaults in a flexible structure in order to efficiently implement complex individual programming.

Threeme works standalone to minimize security risks and dependencies to third-party extensions.
However, it provides configurations and examples for the extensions Mask, News, Powermail and RealUrl.

Hint
----
**The version 3.0.0 will be the first for public usage**

========================================================================================================================
Target groups
========================================================================================================================

Frontend Developer
------------------

The frontend developer gets a unified, clear structure that provides orientation and quick access
to the design of website and content as well as the configuration of TYPO3.

If possible, only Fluid and SASS will be used, TypoScript will be avoided by a Constants set.
Templates for "standard" extensions and examples for the integration of new elements and content complete the picture.
These strong defaults avoid constantly reinventing the wheel, so that more time for the implementation of complex requirements remains.

TYPO3 Integrator
----------------

The Backend is optimized according to a well thought-out scheme: It is reduced to essential features and options.
Instructions and examples for integrators, as well as a customer or editor, enable individual adaptations and targeted editorial work.

Editors
-------

The functions provided by the integrator focus on the daily work of the (chief) editors and their handling of TYPO3:
Entry barriers are reduced, the learning curve flattened, the user experience with the CMS TYPO3 increased.

========================================================================================================================
Installation
========================================================================================================================

Threeme is designed in such a way that it works without additional extensions.
If you do not want to use the following extensions, some empty contents will remain in the page tree. This mainly refers to the extension Mask.

Since Threeme is a TYPO3 distribution, it brings a preconfigured page tree, image and text files as well as
some content of the extensions News, Mask and Powermail. For RealURL there is also a basic configuration.

The distribution works with SASS instead of pure CSS, so the SCSS can be compiled directly on the server using the extension WS_SCSS.
If you prefer to keep the full control, a config.rb can be used for compiling via SASS or Compass.

**Read about preparation first, then simply install Threeme by the Extension Manager**

Preparation
-----------

You should have a fresh TYPO3 installation available. It is enough, if you created an Admin account and threeme loaded from the TER.

As described above, Threeme also creates user and user groups, as well as the records and contents of the extensions mentioned above,
along with the pagetree and the necessary files under fileadmin/threeme. If you want to install the pre-built content of the optional extensions,
you should have these extensions loaded and installed via the TER:

* RealURL
* News
* Mask
* Powermail
* Min

Threeme uses the following system extensions:

* Fluid Styled Content
* Indexed Search (optional, example configuration)
* Felogin (optional, example configuration)

Extension Mask
--------------

Before Threeme is installed, the paths to its Mask configuration must be known.
This could be done in the Extension Manager or directly via the Backend module of Mask.
The following paths have to be set in each configuration tab / field:

General:
* general.json: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Config/mask.json

Frontend:
* frontend.content: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/
* frontend.layouts: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/Layouts/
* frontend.partials: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/Partials/

Backend:
* backend.backend: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/
* backend.layouts_backend: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/Layouts/
* backend.partials_backend: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/Partials/
* backend.preview: typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Preview/

Finally, perform a Database-Compare via Install-Tool!

Extension RealURL
-----------------

If you want to get your RealURL configuration from Threeme,
you can change the following fields in the RealURL configuration via Extension Manager:

* basic.configFile: typo3conf/ext/threeme/Resources/Private/Php/Extensions/Realurl/Configuration.php
* basic.enableAutoConf: 0


========================================================================================================================
Installation successful? I have a Threeme
========================================================================================================================

Finally edit the following Install-Tool values:

* BE|explicitADmode: explicitAllow
* FE|pageNotFound_handling: /404.html


Community
---------

Be cordially invited to participate actively in the further development.
Issues should be sent to the appropriate extension on GitHub.

* `A complete documentation in german language at threeme.de <https://www.threeme.de>`_
* `Threeme on GitHub <https://github.com/AstCommodore/threeme>`_
* André on Slack TYPO3 channel: @commodore
* Mail: andre@threeme.de
