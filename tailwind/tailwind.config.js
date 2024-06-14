module.exports = {
	content: [
		'./**/*.php',
		'./views/**/*.twig',
		'./tailwind/safelist.txt',
	],
	theme: {
		extend: {},
	},
	plugins: [
		require('@tailwindcss/forms'),
		require('@tailwindcss/typography')
	],
};
