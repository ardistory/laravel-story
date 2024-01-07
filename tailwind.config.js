/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/**/*.blade.php',
    './resources/**/*.js'
  ],
  theme: {
    extend: {
      fontFamily: {
        'pixel': ['VT323', 'monospace'],
      }
    },
  },
  plugins: [],
}

