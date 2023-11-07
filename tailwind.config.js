/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                green: {
                    100: "rgba(214, 230, 215, <alpha-value>)",
                    200: "rgba(10, 102, 17, <alpha-value>)",
                }, //0A6611
                black: "rgba(34, 34, 34, <alpha-value>)", //222222
                gray: {
                    400: "rgba(244, 244, 244, <alpha-value>)",
                    500: "rgba(112, 112, 112, <alpha-value>)",
                }, //707070
                crimson: "rgba(227, 27, 66, <alpha-value>)", //E31B42
                orange: "rgba(242, 68, 29, <alpha-value>)", //F2441D

                background: "rgba(244, 249, 245, <alpha-value>)", //F4F9F5
                lightGray: "rgba(232, 232, 232, <alpha-value>)",// E8E8E8
                silver: {
                  500: "rgba(130, 130, 130, <alpha-value>)"
                },

                white: "rgba(255, 255, 255, <alpha-value>)", //FFFFFF
                blue: {
                    100: "rgba(17, 72, 95, <alpha-value>)"
                }, //11485F
                yellow: "rgba(254, 202, 38, <alpha-value>)", //FECA26
                lavender: "rgba(232, 232, 232, <alpha-value>)", //E8E8E8
                sky: "rgba(101, 181, 255, <alpha-value>)", //65B5FF

            },
            boxShadow: {
                bottom: "0px 11px 22px 0px rgba(0, 0, 0, 0.15)",
                leftBottom: "0 1px 3px 0 rgba(0, 0, 0, 0.25)",
                cardShadow: "0px 1px 2px -1px rgba(0, 0, 0, 0.50), 0px 1px 3px 0px rgba(0, 0, 0, 0.25)",
            },
            fontFamily: {
                "brandon-black": ["Brandon Grotesque Black", "ui-monospace"],
                "brandon-bold": ["Brandon Grotesque Bold", "ui-monospace"],
                "brandon-medium": ["Brandon Grotesque Medium", "ui-monospace"],
                "brandon-regular": ["Brandon Grotesque Regular","ui-monospace",],
            },
            backgroundImage: {
              "light-green-pattern": "linear-gradient(180deg, rgba(9, 84, 15, 0.10) 0.91%, rgba(2, 35, 5, 0.70) 87.2%)",
              "light-green-pattern-full":"linear-gradient(180deg, rgba(7, 70, 12, 0.30) 0%, rgba(2, 35, 5, 0.30) 100%)"
            },
        },
    },
    plugins: [require("flowbite/plugin")({
        charts: true,
        }),
    ],
};
