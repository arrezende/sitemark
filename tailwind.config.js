import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                dark: "#080807",
                darkSecondary: "#110F0E",
                darkTertiary: "#1C1917",
                accentOrange: "#ED712E",
                accentRed: "#EB4B5B",
                accentBlue: "#55A1F2",
                accentGreen: "#44CB93",
                accentPurple: "#9D8AFE",
            },
        },
    },
    plugins: [],
};
