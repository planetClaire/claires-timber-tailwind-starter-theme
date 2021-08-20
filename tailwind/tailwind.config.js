module.exports = {
	mode: 'jit',
	purge: {
		content: [
			'./**/*.php',
			'./templates/**/*.twig',
			'./tailwind/safelist.txt',
		],
	},
	darkMode: false, // or 'media' or 'class'
	theme: {
		extend: {},
	},
	variants: {
		extend: {},
	},
	plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
