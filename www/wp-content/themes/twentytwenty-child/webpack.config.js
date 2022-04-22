const path = require('path');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
module.exports = {
    mode: "production",
    entry: [
        //'./js/src/app.js', './css/src/app.css'
        "./dist/js/init.js",
        "./dist/js/bootstrap-input-spinner.js",
        "./dist/css/custom.css",
        "./dist/css/slick.css",
        "./dist/css/style-admin.css",
        "./dist/css/style-blog.css",
        "./dist/css/style-borders.css",
        "./dist/css/style-colors.css",
        "./dist/css/style-fonts.css",
        "./dist/css/style-footer.css",
        "./dist/css/style-general.css",
        "./dist/css/style-header.css",
        "./dist/css/style-icons.css",
        "./dist/css/style-slick.css",
    ],
    output: {
        filename: './js/build/app.min.js',
        path: path.resolve(__dirname)
    },
    module: {
        rules: [
            {
                test: /\.js$/, exclude: /node_modules/,
                /*use: {
                    loader: "babel-loader", 
                    options: { presets: ['babel-preset-env'] } 
                }*/
            },
            {
                // test: /\.(sass|scss)$/,
                test: /\.css$/i,
                use: [MiniCssExtractPlugin.loader, 'css-loader']
                // loader: 'style-loader!css-loader'
            } 
        ]
    },
    plugins: [new MiniCssExtractPlugin({ filename: './css/build/main.min.css' }) ],
    optimization: {
        minimizer: [
            new UglifyJSPlugin({
                cache: true,
                parallel: true
            }), 
            new OptimizeCSSAssetsPlugin({})
        ]
    },
    watch: true
};