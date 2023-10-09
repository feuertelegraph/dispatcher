/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      colors: {
        'dp-orange': {
          DEFAULT: '#F6590C',
          50: '#FEF0E9',
          100: '#FDDFD1',
          200: '#FBBEA0',
          300: '#FA9C6E',
          400: '#F87B3D',
          500: '#F6590C',
          600: '#CD4808',
          700: '#A03906',
          800: '#742904',
          900: '#481903',
          950: '#321202'
        },
      }
    },
  },
  plugins: [],
}

