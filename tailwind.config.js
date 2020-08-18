module.exports = {
    purge: ["./resources/views/**/**/*.blade.php"],
    theme: {
        typography: {
            default: {
                css: {
                    img: {
                        "border-radius": "0.5rem",
                        "box-shadow":
                            "0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)"
                    },
                    a: {
                        color: "#a81c27"
                    }
                }
            }
        },
        extend: {
            colors: {
                "brand-red": "#a81c27",
                "brand-red-75": "rgba(224, 30, 38, 0.75)"
            }
        }
    },

    variants: {},

    plugins: [require("@tailwindcss/typography")]
};
