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
      walsheimedium: ['WalsheimThin', 'sans-serif'],
      lyon: ['LyonTextSemibold', 'serif'],
      handwriting: ['LucidaHandwriting', 'cursive'],
    },
    extend: {
      colors: {
        'red': '#90181B',
        'gold': '#B4A24E',
        'dark-grey': '#262626',
        'medium-grey': '#737373',
        'light-grey': '#ccc',
        'pink': '#e42c5f',
      },
    },
  },
  plugins: [
  ],
}
