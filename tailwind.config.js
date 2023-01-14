const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode:false,

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            screens: {
                sm: "640px",
                // => @media (min-width: 640px) { ... }

                md: "768px",
                // => @media (min-width: 768px) { ... }

                lg: "1024px",
                // => @media (min-width: 1024px) { ... }

                xl: "1280px",
                // => @media (min-width: 1280px) { ... }

                "2xl": "1536px",
                // => @media (min-width: 1536px) { ... }
              },
            colors: {
                my_red: "#BF0615",
                light_red: "#A6123A",
                my_blue:"#021E73",
                light_blue:"#2A4B8C",
                light_green:"#71A63C",
                 my_green:"#118C3C",
                light_white:"#F2F2F2"
              },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
