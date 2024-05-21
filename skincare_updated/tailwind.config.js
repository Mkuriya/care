/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      "colors": {
        "myColor": {
          "100": "#fce0fc",
          "200": "#f8c1f9",
          "300": "#f5a1f7",
          "400": "#fb3341",
          
          "700": "#8f3b91",
          "800": "#5f2860",
        }
      }
    },
  },
  plugins: [],
}

