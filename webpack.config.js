const path = require('path');
const { VueLoaderPlugin } = require('vue-loader');
const TerserPlugin = require('terser-webpack-plugin');

module.exports = {
    entry: './src/main.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'amd/src'),
        library: 'MyLibrary',
        libraryTarget: 'amd',
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader',
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: 'babel-loader',
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
        ],
    },
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'src'),
            vue$: 'vue/dist/vue.esm-bundler.js',
        },
        extensions: ['*', '.js', '.vue', '.json'],
    },
    plugins: [
        new VueLoaderPlugin(),
    ],
    optimization: {
        minimize: true,
        minimizer: [new TerserPlugin()],
    },
    mode: 'production',
};
