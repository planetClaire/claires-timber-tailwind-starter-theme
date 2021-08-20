import { terser } from 'rollup-plugin-terser';

export default {
	input: 'js/app.development.js',
	output: {
		file: 'js/app.production.min.js',
		format: 'iife',
		plugins: [terser()],
	},
};
