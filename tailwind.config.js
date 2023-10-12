import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    mode: "jit",
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'broom': {
                    '50': '#fefee8',
                    '100': '#feffc2',
                    '200': '#fffe87',
                    '300': '#fff543',
                    '400': '#ffe81f',
                    '500': '#efcd03',
                    '600': '#cea000',
                    '700': '#a47304',
                    '800': '#88590b',
                    '900': '#734910',
                    '950': '#432605',
                },
            }
        },
    },

    plugins: [forms],
};
