# Inheritance

Inheritance is a modern starter theme for ClassicPress, built on [Backdrop Core](https://github.com/backdrop-dev). It gives your theme everything it needs right out of the box, so you can build a site with little or no code.

- **Version:** 0.1.3
- **Theme URI:** https://luthemes.com/portfolio/inheritance
- **Author:** [Benjamin Lu](https://luthemes.com)

## Features

- One- and two-column layouts with left or right sidebar
- Custom logo, header, background and colors
- Custom menus, including social navigation and a bottom-corner mobile menu
- Featured images and custom image sizes
- Footer widgets
- Post formats, sticky posts and threaded comments
- Theme options page
- Translation ready (text domain: `inheritance`)

## Requirements

- ClassicPress 2.0 or higher
- PHP 7.4 or higher

For development you will also need:

- Git
- Composer
- Node.js and npm

## Installation

1. Download the latest zip from the [Releases](https://github.com/luthemes/inheritance/releases) page.
2. In your admin panel, go to **Appearance → Themes** and click **Add New**.
3. Click **Upload Theme**, choose the zip file, and click **Install Now**.
4. Click **Activate**.

## Development

Clone the repository and install dependencies:

```bash
git clone https://github.com/luthemes/inheritance.git
cd inheritance
composer install
npm install
```

Available scripts:

| Command          | What it does                                                           |
| ---------------- | ---------------------------------------------------------------------- |
| `npm run watch`  | Rebuilds assets on change                                              |
| `npm run prod`   | Builds production assets with Vite into `public/assets`                |
| `npm run export` | Copies the theme files into an `inheritance/` folder ready to zip      |
| `npm run build`  | Runs `prod` and then `export`                                          |

For a distributable build, run `composer install --no-dev` before `npm run build`.

### Project structure

```
app/          Theme classes (PSR-4, namespace Inheritance\) and bootstrap files
config/       Settings for menus, sidebars, image sizes, theme mods and social icons
resources/    Source JavaScript and SCSS (ITCSS structure)
public/       Compiled assets and Vite manifest (generated)
functions.php Theme entry point
style.css     Theme header
```

### Releases

Publishing a GitHub release triggers the `release` workflow, which installs dependencies, builds and exports the theme, and attaches `inheritance.<tag>.zip` to the release.

## Changelog

See [changelog.md](changelog.md).

## Copyright and License

Inheritance is licensed under the [GNU GPL, v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).

© 2022–2026 Benjamin Lu
