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
        "main": "#1B3D5C",
        "secondary": "#DC9A46",
        "main-light": "#f5f5f5",
        "secondary-light": "#F6F9FB",
        "dark": "#222425",
        "dark-medium": "#414141",
        "main-dark": "#212529",
        "gray": "#A1A1A1",
      },
    },
  },
  plugins: [],
}
