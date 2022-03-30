const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require("copy-webpack-plugin");

module.exports = {
    entry: ['./assets/js/index.js', './assets/scss/main.scss'],
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'public'),
    },
    mode: 'development',
    stats: {
        children: true,
        errorDetails: true,
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            sourceMap: true,
                        }
                    },
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true,
                        }
                    },
                ],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'main.css',
        }),
        new CopyPlugin({
            patterns: [
                { from: 'assets/images/', to: "images" },
            ],
        }),
    ],
};