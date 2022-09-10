const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
    ],
    safelist: [
        "bg-green-600",
        "bg-yellow-600",
        "bg-indigo-600",
        "bg-pink-600",
        "bg-purple-600",
        "bg-red-600",
        "bg-blue-600",
        "w-36",
        "text-red-800",
        "text-red-700"
    ],

    theme: {
        
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],

    corePlugins: {
        container: false,
    }
};
