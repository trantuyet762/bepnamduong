/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.php", "template/**/*.php"],
  theme: {
    extend: {
      container: {
        padding: "1rem",
        center: true,
      },
      colors: {
        'cl-main': "var(--cl-main)",
        'cl-secondary': "var(--cl-secondary)",
      },
    },
    screens: {
      sm: "576px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl":"1600px",
    },
  },
  
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}

