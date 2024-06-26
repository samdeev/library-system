/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: 'Figtree'
            },
            fontSize: {
                'sb': '0.938rem'
            }
        },
    },
    plugins: [],
}
