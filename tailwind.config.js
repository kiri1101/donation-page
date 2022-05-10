module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing: {
        '1xf': '350%',
        '2xf': '390%',
        '4xf': '450%',
        'paybox': '40rem',
      },
    },
  },
  plugins: [
    require("daisyui"),
  ],
}

