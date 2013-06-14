
(function(window){
	"use strict"

	window.Post = Backbone.Model.extend({
			defaults: {
				title: "",
				url: "",
				created_at: "",
				updated_at: "",
				karma: ""
			},
			urlRoot: "posts/"

	});

})(window);
