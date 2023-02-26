/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Poppins', 'sans-serif'],
      },
      colors: {
        primary: "#fffffe",
        secondary: "#b8c1ec",
        hitam: "#121629",
        btnBg: "#ff8906",
        paragraphBg: "#a7a9be",
        baju: "#ADE1DA",
      },
      
    },
  },
  plugins: [],
}