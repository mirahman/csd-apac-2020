const { Given, When, Then } = require('@cucumber/cucumber');
const Calculator = require('../../Calculator');
const expect = require('chai').expect;

let calculator;

Given('I have provided {int} and {int}', function (x, y) {
    // Given('I have provided {int} and {float}', function (int, float) {
    // Given('I have provided {float} and {int}', function (float, int) {
    // Given('I have provided {float} and {float}', function (float, float2) {
    // Write code here that turns the phrase above into concrete actions
    //return 'pending';
    calculator = new Calculator(x, y)
});

When('I add them up', function () {
    // Write code here that turns the phrase above into concrete actions
    calculator.add();
});

When('I use the subtract functionality', function () {
    // Write code here that turns the phrase above into concrete actions
    calculator.subtract();
});

Then('The result {int} will be returned', function (result) {
    // Then('The result {float} will be returned', function (float) {
    // Write code here that turns the phrase above into concrete actions
    expect(calculator.getResult()).to.be.equal(result);
});

