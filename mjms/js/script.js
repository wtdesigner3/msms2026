;;
(function(variable_0) {
    "use strict";
    variable_0(function() {
        variable_0("#header")["after"]("<div class=\"sticky-spacer\"></div>");
      
        
        
        variable_0("body")["queryLoader2"]({
            backgroundColor: "#fff",
            barColor: "#DB2115",
            barHeight: 4,
            deepSearch: true,
            minimumTime: 1000,
            onComplete: function() {
                variable_0(".loader")["fadeOut"]("200")
            }
        });
       
        variable_0(window)["on"]("load", function() {
            var variable_15 = variable_0(".isotope");
            variable_0("#filters button")["on"]("click", function() {
                var variable_16 = variable_0(this);
                if (!variable_16["hasClass"]("is-checked")) {
                    variable_16["parents"]("#options")["find"](".is-checked")["removeClass"]("is-checked");
                    variable_16["addClass"]("is-checked")
                };
                var variable_17 = variable_16["attr"]("data-filter");
                variable_15["isotope"]({
                    itemSelector: ".item",
                    filter: variable_17
                });
                return false
            });
            variable_0["mad_core"]["isotope"]()
        });
    })
})(jQuery)