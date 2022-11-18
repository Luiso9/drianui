/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  	"./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
      fontFamily: {
        'pd': ['"Playfair Display"', 'sans-serif'],
        'secular': ['Secular One', 'sans-serif'],
      }
  }
  plugins: [
    require("daisyui") 
  ],
  
}
