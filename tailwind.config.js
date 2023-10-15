/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                green: "#0A6611",
                black: "#222222",
                gray: "#707070",
                crimson: "#E31B42",
                orange: "#F2441D",
                culture: "#F4F4F4",
                background: "#F4F9F5",
            },
            boxShadow: {
                bottom: "0px 11px 22px 0px rgba(0, 0, 0, 0.15)",
            },
            // fontFamily: {

            // }
        },
    },
    plugins: [],
};
