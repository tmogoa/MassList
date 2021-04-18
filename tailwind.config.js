module.exports = {
    purge: [
        "./resources/**/*.blade.php",

        "./resources/**/*.js",

        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        fontFamily: {
            sans: ["Inter", "ui-sans-serif", "system-ui"],
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
