/**
 *  @file			bomber.js
 *
 *  @class		Bomber
 *  @brief		Main class to create a bomber game.
 *
 *  @param		Canvas : Jquery object of the container of the bomber.
 *  @param		endGame: Jquery object of the container of the end game message.
 *
 *  @author	Thomas Chafiol <thomaschaf@gmail.com>
 *  @date		17 / 02 / 2015
 */
function Bomber(canvas, endGame) {
	var self = this;
	self.gap = 30;
	self.difficulty = 10;

	self.init = function(canvas, endGame) {
		self.canvas = canvas;
		self.context = self.canvas.get(0).getContext("2d");
		self.endGame = new EndGame(endGame);
		self.setClick(canvas);
		self.bombImage = new Image();
		self.bombImage.src = '/images/demineur.png';
	};

	self.resize = function () {
		var x = canvas.parent().width(),
				y = canvas.parent().height();

		self.context.canvas.width  = x - (x % self.gap);
		self.context.canvas.height = y - (y % self.gap);
		self.margeX = (x % self.gap) / 2;
		self.margeY = (y % self.gap) / 2;
		canvas.css('margin-top', self.margeX + 'px');
		canvas.css('margin-left',self.margeY + 'px');
	};

	self.newGame = function () {
		self.endGame.newGame();
		self.resize();
		self.bomberMap = new BomberMap(
			self.context.canvas.width / self.gap,
			self.context.canvas.height/ self.gap,
			self.difficulty
		);
		self.draw();
	};

	self.onClick = function(e, x, y) {
		var x0 = Math.floor(x / self.gap),
				y0 = Math.floor(y / self.gap),
				action;

		if (self.bomberMap.isReveal(x0, y0)) return ;
		action = self.bomberMap.reveal(x0, y0);
		self[action.action](action.params._1, action.params._2);
		if (self.bomberMap.isClean())
			self.end(true);
	};

	self.end = function (win) {
		var x = 0, y;

		while (x < self.context.canvas.width)
		{
			y = 0;
			while (y < self.context.canvas.height)
			{
				self.drawSquare(x / self.gap, y / self.gap);
				y += self.gap;
			}
			x += self.gap;
		}
		self.endGame.active(win);
	};

	self.drawSquare = function(x, y, hasBegin) {
		var x0 = x * self.gap,
				y0 = y * self.gap,
				type = self.bomberMap.getType(x, y);

		if (type === CaseType.BOMB)
			return self.context.drawImage(self.bombImage, x0 + 2, y0 + 2);
		if (!hasBegin) self.context.beginPath();
		self.context.rect(x0, y0, self.gap, self.gap);
		self.context.fillStyle = 'grey';
		self.context.lineWidth = 1;
		self.context.strokeStyle = 'black';
		self.context.fill();
		if (type > 0)
		{
			self.context.font = 'normal 13pt Arial';
			self.context.fillStyle = 'blue';
			self.context.fillText(type, x0 + 10, y0 + 22);
		}
		if (!hasBegin) self.context.stroke();
	};

	self.drawSquares = function(squares) {
		var i = 0;

		while (i < squares.length)
		{
			self.context.beginPath();
			self.drawSquare(squares[i][0], squares[i][1], true);
			self.context.stroke();
			i += 1;
		}
	};

	self.drawLine = function(x0, y0, x1, y1) {
		self.context.moveTo(x0, y0);
		self.context.lineTo(x1, y1);
	};

	self.drawGrid = function() {
		var i = 0;

		self.context.beginPath();
		while (i <= self.context.canvas.height)
		{
			self.drawLine(0, i, self.context.canvas.width, i);
			i += self.gap;
		}
		i = 0;
		while (i <= self.context.canvas.width)
		{
			self.drawLine(i, 0, i, self.context.canvas.height);
			i += self.gap;
		}
		self.context.stroke();
	};

	self.draw = function() {
		self.context.beginPath();
		self.context.rect(0, 0, self.context.canvas.width, self.context.canvas.height);
		self.context.fillStyle = '#8E9190';
		self.context.fill();
		self.context.stroke();
		self.drawGrid();
	};

	self.setClick = function(canvas) {
		var x, y,
				offset = canvas.offset();

		canvas.click(function(e) {
			self.onClick(e, e.offsetX, e.offsetY - 2);
		});
	};

	self.init(canvas, endGame);
}

function init() {
	if (!document.bomber)
		document.bomber = new Bomber($('#bomber'), $("#endGame"));
	document.bomber.newGame();
}

$(document).ready(init);

window.onresize = init;
