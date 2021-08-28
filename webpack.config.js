const path = require("path");

module.exports = {
  entry: "./assets/js/home_prod.js",
  mode: process.env.NODE_ENV === "production" ? "production" : "development",
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
    ],
  },
  output: {
    filename: "home.js",
    path: path.resolve(__dirname, "./assets/dist"),
  },
};
