# Claire's Timber & Tailwind Wordpress Starter theme

This is the starter theme from [Timber](https://timber.github.io/docs/) with [Tailwind CSS](https://tailwindcss.com/) added as well as some ultra minimal build tooling.

1. Clone this theme into your wp-content/themes folder, using a folder name that makes sense to you
2. Install the Timber plugin [Timber Library](https://wordpress.org/plugins/timber-library/)
3. Activate the theme
4. Optionally import the `sample-page.xml` page included in this repo which includes a more extended sample of HTML to test with (see a screenshot at the bottom of this page). 

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

Gutenberg's default editor has been set up with the -600 variants of Tailwind's default color palette.

## Scripts

Inevitably you are going to want some scripts to go with your theme. There is a starter js file in `/js/app.js`. It doesn't do anything and if you don't want it, just disable enqueuing of the script in `functions.php`.

If you do want to queue scripts, you might want to make use of [Studio 24 WordPress Multi-Environment Config](https://github.com/studio24/wordpress-multi-env-config) to ease dev/prod woes (see `functions.php/enqueue_scripts` for details).

## Screenshot of sample page

![sample-page](https://user-images.githubusercontent.com/379390/130202794-f41efe89-8265-4bb1-b778-507e36aae29f.png)
