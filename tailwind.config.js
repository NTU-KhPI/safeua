const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],

    theme: {
        screens: {
            'xl': { 'max': '1280px' },
            'lg': { 'max': '980px' },
            'md': { 'max': '768px' },
            'sm': { 'max': '480px' },
        },
        container: {
            padding: '15px',
            center: true,
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', 'sans-serif'],
            },
        },
    },
    plugins: [require('@tailwindcss/forms')],
};
