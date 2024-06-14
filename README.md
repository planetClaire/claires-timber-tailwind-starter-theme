# Claire's Timber & Tailwind Wordpress Starter theme

This is the starter theme from [Timber](https://timber.github.io/docs/) with [Tailwind CSS](https://tailwindcss.com/) added as well as some ultra minimal build tooling.

1. Clone this theme into your wp-content/themes folder, using a folder name that makes sense to you
2. Install Timber: `composer install --no-dev`
3. Build the theme: `npm install && npm run prod`
4. Activate the theme

## Start developing

1. `npm install`
2. `npm run watch`
3. Add any tailwind classes that you ONLY use in the editor to `safelist.txt`

## Build for production

1. `npm run prod` - this will package css using Tailwind's CLI and js using rollup (see Scripts note below).

## Tweaks of the OOTB installations of Timber & Tailwind

1. Tailwind's Typography plugin is enabled and `prose prose-blue` classes added to the body, this give us most of the styling that we expect from the Gutenberg editor, together with the standard block-library includes.
2. Tailwind's Nesting plugin is included for sass-like declarations in our css.
3. `base.css` contains a very few sanity tweaks.

## Colors

Gutenberg's default editor has been set up with the -600 variants of a subset of Tailwind's default color palette.

## Scripts

Inevitably you are going to want some scripts to go with your theme. There is a starter js file in `/js/app.js`. It doesn't do anything and if you don't want it, just disable enqueuing of the script in `functions.php`.
