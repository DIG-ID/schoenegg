/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      walsheimthin: ['WalsheimThin', 'sans-serif'],
      walsheimlight: ['WalsheimLight', 'sans-serif'],
      walsheimedium: ['WalsheimMedium', 'sans-serif'],
      lyon: ['LyonTextSemibold', 'serif'],
      handwriting: ['LucidaHandwriting', 'cursive'],
      opensans: ['Open Sans', 'sans-serif'],
    },

    extend: {
      letterSpacing: {
        wide: '.038em',
        wider: '.06em',
      },
      colors: {
        'red': '#90181B',
        'gold': '#B4A24E',
        'darker-grey': '#262626',
        'dark-grey': '#464646',
        'medium-grey': '#737373',
        'light-grey': '#ccc',
        'pink': '#e42c5f',
      },
      transitionTimingFunction: {
        'out-expo': 'cubic-bezier(0.16, 1, 0.3, 1)',
      }
    },
  },
  plugins: [
  ],
}
