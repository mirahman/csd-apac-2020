const assert = require('assert');
const calculator = require('./calculator');

it('should add two positive integer', function () {
    let result = calculator.add(2, 3);
    assert.equal(result, 5);
});

it('should add one positive and one negative integer', function () {
    assert.equal(calculator.add(4, -2), 2);
});

it('should add two integers in quote', function () {
    assert.equal(calculator.add('2', '3'), 5);
});

it('should add any non integer no', function () {
    assert.equal(calculator.add('a', 'b'), NaN);
});

it('should add two floating number', function () {
    assert.equal(calculator.add(4.5, 8.5), 13.0);
});

it('should add one big number and one smaller number', function () {
    assert.equal(calculator.add(999999999999999999, 1), 1000000000000000000);
});

it('should subtract two floating number', function () {
    assert.equal(calculator.subtraction(9.5, 8.5), 1.0);
});
