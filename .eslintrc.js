module.exports = {
    root: true,
    env: {
        node: true,
        amd: true, // Add AMD environment
    },
    extends: [
        'plugin:vue/vue3-essential',
        'eslint:recommended',
    ],
    parserOptions: {
        parser: 'babel-eslint',
    },
    rules: {
        'no-console': process.env.NODE_ENV === 'production' ? 'warn' : 'off',
        'no-debugger': process.env.NODE_ENV === 'production' ? 'warn' : 'off',
        // Add more rules to ignore here
    },
    ignorePatterns: [
        'amd/src/bundle.js', // Ignore bundle.js file
        // Add more files or directories to ignore here
    ],
};
