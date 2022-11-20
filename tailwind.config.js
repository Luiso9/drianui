/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  	"./resources/**/*.blade.php",
    "./resources/**/*.{js,css}",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("daisyui")
  ],

}
