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
        'thanks-giving-primary': '#F9E2C3',
        'thanks-giving-secondary' : '#6C370B',
        'thanks-giving-trans' : 'rgba(255, 255, 255, 0.26)',
        'thanks-giving-linear' : 'rgba(211, 172, 135, 0.21)',
        'thanks-giving-border' : 'rgba(201, 123, 72, 0.23)',
      },
      fontFamily: {
        'sacramento':  ['Sacramento', 'cursive'],
        'poppins': ['Poppins', 'sans-serif'],
      },
      backgroundImage:{
        'thanks-giving': 'resources/images/thanks-giving-bg.png'
      },
      boxShadow: {
        'custom': '-4.79792px 4.79792px 2.74167px #9D6537, 4.79792px 4.79792px 2.74167px #9D6537, -4.79792px -4.79792px 2.74167px #9D6537, 4.79792px -4.79792px 2.74167px #9D6537',
      }
    },
  },
  plugins: [],
}