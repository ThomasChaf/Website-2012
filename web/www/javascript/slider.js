Slider = function() {

	var self = this;

	this.progressBar = function() {
		jQuery(".jsSlider .sliderBar")
		.css({width: "", opacity: 0})
		.animate({width: "100%", opacity: 1}, {queue: false, duration: 5000});
	}

	this.prev = function() {
		jQuery(".jsSlider ul li.anim-f" + this.current).animate({opacity: "0"}, 1000);
		this.current -= 1;
		if (this.current < 0)
			this.current = this.max - 1;
		jQuery(".jsSlider ul li.anim-f" + this.current).animate({opacity: "1"}, 1000);
		this.progressBar();
	}

	this.next = function() {
		jQuery(".jsSlider ul li.anim-f" + this.current).animate({opacity: "0"}, 1000);
		this.current = (this.current + 1) % this.max;
		jQuery(".jsSlider ul li.anim-f" + this.current).animate({opacity: "1"}, 1000);
		this.progressBar();
	}

	this.rotate = function() {
		this.next();
	}

	this.start = function() {
		this.progressBar();
		setInterval(function() {
			return self.rotate()
		}, 5000);
	}

	this.__init = function() {
		this.current = 0;
		this.max = jQuery(".jsSlider ul li").css("opacity", 0).length;
		jQuery(".jsSlider ul li:first").css("opacity", 1);
		jQuery(".jsSlider .glyphicon-chevron-left").click(function() {
			self.prev()
		});
		jQuery(".jsSlider .glyphicon-chevron-right").click(function() {
			self.next()
		});
	};

	this.__init();
};
