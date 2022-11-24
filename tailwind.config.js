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
        'syne': ['Syne', 'sans-serif'],
        'dmSans': ['DM Sans', 'sans-serif'],
      },
      colors:{
        MainBlackColor: '#010101',
        MainPurpleColor: '#C6CBDE',
        SecondWhiteColor: '#F8F8F8',
        MainWhiteColor: '#FFFFFF',
      },
      screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
      },
    },
  },
  plugins: [],
}