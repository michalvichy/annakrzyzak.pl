window.BC = window.BC || {};
window.BC._submodules = window.BC._submodules || {};

(function($) {

    $(function() {
        var bodyClassName = document.body.className.replace(/-/g, '_');
        var bodyClasses = bodyClassName.split(/\s+/);

        var getSubmodule = function(name) {
            return function() {
                window.BC._submodules[name]($);
            };
        };

        $.each(['common'].concat(bodyClasses), function(i, module) {
            if ($.isFunction(window.BC[module])) {
                window.BC[module]($);
            }
        });
    });

}(jQuery));
