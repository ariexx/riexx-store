const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    mode: "jit",

    darkMode: "media",
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                sans: '"Segoe UI", sans',
                open: "'Open Sans', sans-serif",
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [require("@tailwindcss/forms"), require("daisyui")],

    daisyui: {
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: false,
        rtl: false,
        themes: ["light"],
    },
};
