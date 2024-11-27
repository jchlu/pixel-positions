import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss/types').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Hanken Grotesk', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: '#060606'
            },
            fontSize: {
                '2xs': '.625rem' // 10px sum 10/16
            }
        },
    },
    plugins: [],
};
