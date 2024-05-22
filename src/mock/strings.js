export function getString(key, component) {
    return new Promise((resolve) => {
        resolve(`Mock string for ${key} in ${component}`);
    });
}
