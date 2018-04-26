var path = require('path');
const extractPlugin = require('extract-text-webpack-plugin');
const ex = new extractPlugin('../style.css');
const autoPrefix = {
    loader: 'postcss-loader',
    options: {
        plugins: (loader) => [require('autoprefixer')()]
    }
};
//const browserSync = require("browser-sync-webpack-plugin");
//const browser = new browserSync({
//    open: "external",
//    host: "jfd.jforbes.site",
//    port: 2999,
//    proxy: "http://jfd.jforbes.site"
//});

/*   SASS, TYPESCRIPT  */
const config = {
    entry: {
        style: './wp-content/themes/jfd/js/scss.js',
        main: './wp-content/themes/jfd/js/type.js'
    },
    output: {
        path: path.resolve('wp-content/themes/jfd/js'),
        filename: '[name].js'
    },

    resolve: {
        extensions: ['.ts', '.tsx', '.js']
    },
    module: {
        rules: [
            {
                test: /\.scss$/i,
                use: ex.extract(['css-loader', autoPrefix, 'sass-loader'])

            },
            {
                test: /\.tsx?$/,
                loader: 'ts-loader'

            }
        ]
    },

    watch: true,
    plugins: [
        ex
    ]
}

module.exports = config;
