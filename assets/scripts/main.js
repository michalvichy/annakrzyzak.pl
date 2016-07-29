window.AK = window.AK || {};
window.AK._submodules = window.AK._submodules || {};

(function($) {

    $(function() {
        var bodyClassName = document.body.className.replace(/-/g, '_');
        var bodyClasses = bodyClassName.split(/\s+/);

        var getSubmodule = function(name) {
            return function() {
                window.AK._submodules[name]($);
            };
        };

        $.each(['common'].concat(bodyClasses), function(i, module) {
            if ($.isFunction(window.AK[module])) {
                window.AK[module]($);
            }
        });
    });

}(jQuery));
