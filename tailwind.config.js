/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.php"],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
                termina: ["Termina Test", "sans-serif"],
            },
        },
    },
    plugins: [],
};
