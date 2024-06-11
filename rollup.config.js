import { terser } from 'rollup-plugin-terser';

export default {
	input: 'assets/js/app.development.js',
	output: {
		file: 'assets/js/app.production.min.js',
		format: 'iife',
		plugins: [terser()],
	},
};
