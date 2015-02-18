/**
 *  @file   end_game.js
 *
 *  @class  EndGame
 *	@brief	Specify action on the end of the game.
 *
 *	@param	Jquery element of the container of the end game message.
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   17 / 02 / 2015
 */
function EndGame(elem) {
	var self = this;

	self.init = function (elem) {
		self.elem = elem;
	};

	self.newGame = function () {
		self.elem.hide();
	};

	self.loose = function () {
		self.elem.find("p").text("Game Over !");
		self.elem.children().css("background-color", "#EB5959");
	};

	self.win = function () {
		self.elem.find("p").text("Win !");
		self.elem.children().css("background-color", "#82CD87");
	};

	self.active = function (win) {
		win ? self.win() : self.loose();
		self.elem.show();
		self.elem.click(function(e) {
			e.stopPropagation();
		});
		self.elem.find("button").click(function() {
			init();
		});
	};

	this.init(elem);
}
