// tailwind.config.js
module.exports = {
  purge: [
    './resources/views/**/*.php',
    './resources/views/**/*.blade',
  ],
  future: {
    removeDeprecatedGapUtilities: true,
  },
  theme: {},
  variants: {},
  plugins: [],
};