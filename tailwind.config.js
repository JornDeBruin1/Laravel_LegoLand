/** @type {import('tailwindcss').Config} */
export default {
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  theme: {
    extend: {
      colors: {
        customYellow: '#facf00',
        customMediumDarkYellow: '#f1be00',
        customDarkBlue: '#276db8',  
      },
      screens: {
        customLg: '1218px',
        custom2Xl: '1540px',
      },
    },
  },
  plugins: [],
};
