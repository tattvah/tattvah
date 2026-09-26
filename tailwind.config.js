/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    __dirname + "/**/*.php",
    __dirname + "/*.php",
    __dirname + "/public/**/*.js"
  ],
  theme: {
    fontFamily: {
      sans: ["Roboto"],
      mulish: ["Mulish"],
      lora: ["Lora", "serif"],
      openSans: ["Open Sans", "sans-serif"],
    },
    extend: {
      colors: {
        'sugandhlok-maroon': '#490000',
        'sugandhlok-peach': '#e4aa83',
        'sugandhlok-bg': '#efecec',
      }
    },
  },
  plugins: [],
};
