
(function(window){
	"use strict"

	window.Story = Backbone.Model.extend({
			defaults: {
				title: "",
				url: "",
				created_at: "",
				updated_at: "",
				karma: ""
			},
			urlRoot: "stories/"

	});

})(window);
