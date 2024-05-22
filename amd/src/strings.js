define(['core/str'], function(str) {
    return {
        getString: function(key, component) {
            return str.get_string(key, component).then(function(langString) {
                return langString;
            }).catch(function() {
                return '[[ ' + key + ' ]]';
            });
        }
    };
});
