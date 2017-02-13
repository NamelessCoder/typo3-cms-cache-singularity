TYPO3 Cache Clear Menu Compactor
================================

> Ten lines of code to save you hundreds of mouse clicks per day.

What does it do?
----------------

The fake cache menu item removes all other menu items except for the "clear all caches" command. This in turn causes
the cache clearing menu to no longer be rendered as a popup menu, but instead trigger "clear all caches" as soon as
you click the "cache flush" icon.

The extension works by taking advantage of the new feature added in TYPO3 8.5 which compacts the cache flushing menu
if a single item exists. It is of course possible to achieve the same result using pageTSconfig or other means to give
normal users access to only the "clear all caches" menu item - but to do so for admin users requires an approach like
the one this extension provides.

Note that the cache menu is only compacted if the user already has access to the "clear all caches" menu item!

Note that this extension does *NOT* interfere with things like flushing by tags when a record is saved - only the
manually triggered cache flushing from the TYPO3 backend is affected (install tool's cache flushing is not affected).

Installing
----------

Only available through composer:

```
composer require namelesscoder/typo3-cms-cache-singularity
```

Target audience
---------------

* Development situations where aggressive cache flushing and easier access to performing such a flush, is desired.
* Rare production situations which for some reason (quirk, bug, proxy, whatever) require aggressive cache flushing.

In almost all cases you only want to use this in development contexts or on testing/staging sites!
