# Claire's Timber & Tailwind Starter theme

This is the starter theme from [Timber](https://timber.github.io/docs/) with [Tailwind CSS](https://tailwindcss.com/) added as well as some ultra minimal build tooling.

1. Clone this theme into your wp-content/themes folder, using a folder name that makes sense to you
2. Install the Timber plugin [Timber Library](https://wordpress.org/plugins/timber-library/)
3. Activate the theme
4. Optionally import the `sample-page.xml` page included in this repo which includes a more extended sample of HTML to test with.

## Start developing

1. `npm install`
2. `npm run watch`
3. Add any tailwind classes that you ONLY use in the editor to `safelist.txt`

## npm scripts

1. `npm run watch` - for development

## Tweaks of the OOTB installations of Timber & Tailwind

1. Tailwind's Typography plugin is enabled and `prose prose-blue` classes added to the body, this give us most of the styling that we expect from the Gutenberg editor, together with the standard block-library includes.
2. Tailwind's Nesting plugin is included for sass-like declarations in our css.
3. `base.css` contains a very few sanity tweaks.

## Colors

Gutenberg's default editor has been set up with the -600 variants of Tailwind's default color palette.
