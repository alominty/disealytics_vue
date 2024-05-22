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
            vue$: 'vue/dist/vue.esm-bundler.js',
            '@': path.resolve(__dirname, 'src'),
            'block_disealytics_vue/strings': path.resolve(__dirname, 'src/mock/strings.js'),
        },
        extensions: ['*', '.js', '.vue', '.json'],
    },
    plugins: [
        new VueLoaderPlugin(),
    ],
    optimization: {
        splitChunks: false,
        minimize: true,
        minimizer: [new TerserPlugin()],
    },
    mode: 'production',
};
