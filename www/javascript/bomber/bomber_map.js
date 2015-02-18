/**
 *  @file   @fileName
 *
 *	@class	BomberMap
 *  @brief  Container of the map of the bomber.
 *					Use it to parcours the array.
 *
 *	@param	x : With of the map.
 *	@param	y : height of the map.
 *	@param  difficulty : /100 Number of bomb in the map.
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   17 / 02 / 2015
 */
function BomberMap(x, y, difficulty)
{
	var self = this;

	self.init = function(x, y, difficulty) {
		var _x, _y;

		self.width = x;
		self.height= y;
		self.content = [];
		self.nbBomb = Math.round(difficulty * (x * y) / 100);
		self.toReveal = x * y;
		_y = 0;
		while (_y < y)
		{
			_x = 0;
			while (_x < x)
			{
				self.content.push(new Case());
				_x += 1;
			}
			_y += 1;
		}
		self.diserseBomb(self.nbBomb);
	};

	self.diserseBomb = function(nbBomb) {
		while (nbBomb > 0)
		{
			_x = Math.floor(Math.random() * x);
			_y = Math.floor(Math.random() * y);
			if (!self.isBomb(_x, _y))
			{
				self.setBomb(_x, _y);
				nbBomb -= 1;
			}
		}
	};

	self.__reveal = function (x0, y0, squares) {
		var type = self.setReveal(x0, y0),
				x, y;

		squares.push([x0, y0]);
		if (type === 0)
		{
			y = y0 - 1;
			while (y <= y0 + 1)
			{
				x = x0 - 1;
				while (x <= x0 + 1)
				{
					if ((x !== x0 || y !== y0) && (y >= 0 && x >= 0 && y < self.height && x < self.width))
					{
						if (!self.isReveal(x, y) && !self.isBomb(x, y))
							self.__reveal(x, y, squares);
					}
					x += 1;
				}
				y += 1;
			}
		}
	};

	self.reveal = function (x, y) {
		if (self.isBomb(x, y))
			return { action : 'end', params : { _1 : false } };
		squares = [];
		self.__reveal(x, y, squares);
		return { action : 'drawSquares', params : { _1 : squares } };
	};

	self.isBomb = function(x, y) {
		return self.content[y * self.width + x].isBomb();
	};

	self.isReveal = function(x, y) {
		return self.content[y * self.width + x].isReveal;
	};

	self.isEmpty = function(x, y) {
		return self.content[y * self.width + x].isEmpty();
	};

	self.getType = function(x, y) {
		return self.content[y * self.width + x].getType();
	};

	self.setBomb = function(x, y) {
		var x0, y0;

		self.content[y * self.width + x].setBomb();
		y0 = y - 1;
		while (y0 <= y + 1)
		{
			x0 = x - 1;
			while (x0 <= x + 1)
			{
				if ((x0 !== x || y0 !== y) && (y0 >= 0 && x0 >= 0 && y0 < self.height && x0 < self.width))
					self.content[y0 * self.width + x0].setNeighboor();
				x0 += 1;
			}
			y0 += 1;
		}
	};

	self.setReveal = function(x, y) {
		self.toReveal -= 1;
		return self.content[y * self.width + x].setReveal();
	};

	self.isClean = function () {
		return self.toReveal === self.nbBomb;
	};

	self.init(x, y, difficulty);
}
