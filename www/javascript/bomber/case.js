/**
 *  @file   case.js
 *
 *	@class	Case
 *  @brief  Container of the type/value of a case.
 *					Could be a bomb or could be empty.
 *					- if it is empty, it has a value that is the number a bomb neighboor.
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   17 / 02 / 2015
 */
CaseType = {
	BOMB	: -1,
	EMPTY : 0
};

function Case()
{
	var self = this;

	self.init = function() {
		self.type = CaseType.EMPTY;
		self.isReveal = false;
	};

	self.isBomb = function() {
		return self.type === CaseType.BOMB;
	};

	self.isEmpty = function() {
		return self.type !== CaseType.BOMB;
	};

	self.setNeighboor = function () {
		if (self.type !== CaseType.BOMB)
			self.type += 1;
	};

	self.hasNeighboor = function () {
		return self.type > 0;
	};

	self.setBomb = function() {
		self.type = CaseType.BOMB;
	};

	self.getType = function () {
		return self.type;
	};

	self.setReveal = function () {
		self.isReveal = true;
		return self.type;
	};

	self.init();
}
