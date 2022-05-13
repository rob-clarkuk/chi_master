const webpack = require('webpack');

const path = require("path");

module.exports = {
  entry: {
    'scripts': "./scripts/scripts.js"
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: ["babel-loader"]
      },
      {
        test: /\.css$/i,
        use: ["style-loader", "css-loader"],
      },
    ]
  },
  stats: {
    children: true,
    errorDetails: true,
  },
  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, "js")
  }
}