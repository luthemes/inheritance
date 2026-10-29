# Change Log

## 0.1.4 - 10.28.2026
### Bug
* Fixed submenus on small and touch screens: no submenu toggle was added, so child pages couldn't be opened
* Fixed a JavaScript error on every keyboard focus change in the menu
* Fixed the menu toggles' empty screen reader text
* Fixed the customizer loading four scripts and styles that don't exist, which caused a JavaScript error, and a "must be an array" notice from `wp_localize_script()`
* Fixed Custom Footer Text showing in the customizer while the "powered by" credit was on; controls that don't apply are now hidden when the customizer opens
* Fixed the "disable emoji", "disable toolbar" and "disable WP embed" settings, which had no effect
* Fixed unstyled emoji images on browsers without native emoji
* Fixed the charset and viewport meta tags printing twice
* Fixed a fatal error when the Backdrop framework isn't installed; administrators now see a notice and visitors a 503 page
* Fixed a fatal error ("Call to undefined function Inheritance\Vite\asset()") when `vendor/` was installed before the Vite helper was added
* Fixed the customize component booting twice
* Fixed translations not loading from `public/lang`

### Security
* Updated the build tools: Vite 7.3.7, Rollup 4.66.0 (CVE-2026-27606 was fixed in 4.59) and Immutable 5.1.9 (CVE-2026-29063 was fixed in 5.1.5), with `overrides` keeping Rollup and Immutable at patched versions; `npm audit` finds no vulnerabilities
* The release workflow no longer needs the `PRIVATE_KEY` or `TOKEN` secrets, installs exactly what `package-lock.json` pins, checks that the release tag matches the `style.css` version, and stops if `npm audit` finds a high or critical vulnerability

### Enhancement
* Removed `backdrop-dev/mix`, which wasn't used, and `composer.lock`; `backdrop-dev/framework` and `backdrop-dev/fonts` are pinned to the commits this release was tested with
* Renamed the `generosity/image/size/{name}/label` filter to `inheritance/image/size/{name}/label`
* `style.css` requires WordPress 5.9 or later (ClassicPress 2.0 or later) and declares `Domain Path: /public/lang`
* Added a translation template, `public/lang/inheritance.pot`, and translator comments for the strings with placeholders

## 0.1.3 - 10.28.2026
### Bug
* Fixed fatal error on category, tag, author and date archives
* Fixed fatal error in the social menu when a link matched an icon
* Fixed duplicate social icons and the missing Google+ icon
* Fixed fatal errors on the Inheritance Settings page
* Fixed the settings page heading, Customize link and tab classes not showing
* Fixed deprecation notice from `Collection::jsonSerialize()` on PHP 8.1 and higher
* Fixed the featured image size on pages, and a fatal error when the size setting was saved blank

### Enhancement
* Removed the Footer Sidebar widget area, which was registered but never displayed
* Removed the empty sidebar from pages and centered page content
* Updated Backdrop framework to the `develop` branch
* Renamed leftover `momentum/` hooks to `inheritance/`; the old names still work but are deprecated
* Renamed the `inheritance/config/{$name}/` filter to `inheritance/config/{$name}`; the old name still works but is deprecated
* Updated readme and theme metadata
* Updated release workflow actions

## 0.1.2 - 03.02.2026
### Bug
* Fixed Metadata spacing

## 0.1.1 - 11.11.2025
### Enhancement
* Re-design home/blog section only 

## 0.1.0 - 07.21.2025
### Enhancement
* Reorganized code for Featured Image

### Bug
* Fixed minor styles

## 0.0.9 - 04.02.2025
### Enhancement
* Update screenshot

## 0.0.8 - 04.01.2025

### Enhancement
* Add Author to Metadata

### Bug
* Fixed Featured Image

## 0.0.7 - 11.18.2024
### Enhancement
- Updated Description

## 0.0.6 - 11.14.2024
### Ehancement
- fixed pagination due to php 8.2 and higher

## 0.0.5 - 10.04.2024

### Added
- Support Social Navigation

## 0.0.4 - 09.04.2024

### Enhancement
- Fixed functions-filter.php

## 0.0.3 - 09.04.2024

### Added
- Added and improve features

## 0.0.2 - 11.23.2024

### Enhancements
- Minor changes to styles

## 0.0.1 - 11.18.2022
- Theme launch, Everything's new!