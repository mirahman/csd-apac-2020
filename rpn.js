String.prototype.isNumeric = function () {
    return !isNaN(parseFloat(this)) && isFinite(this);
}

function solveRPN(postfix) {
    var resultStack = [];
    postfix = postfix.split(" ");
    for (var i = 0; i < postfix.length; i++) {
        if (postfix[i].isNumeric()) {
            resultStack.push(postfix[i]);
        } else {
            var a = resultStack.pop();
            var b = resultStack.pop();
            if (postfix[i] === "+") {
                resultStack.push(parseInt(a) + parseInt(b));
            } else if (postfix[i] === "-") {
                resultStack.push(parseInt(b) - parseInt(a));
            } else if (postfix[i] === "*") {
                resultStack.push(parseInt(a) * parseInt(b));
            } else if (postfix[i] === "/") {
                resultStack.push(parseInt(b) / parseInt(a));
            } else if (postfix[i] === "^") {
                resultStack.push(Math.pow(parseInt(b), parseInt(a)));
            }
        }
    }

    if (resultStack.length > 1) {
        return "error";
    } else {
        return resultStack.pop();
    }
}

console.log(solveRPN("31 25 +"))
console.log(solveRPN("10 5 + 6 +"))
console.log(solveRPN("10 5 * 3 - 8 +"))
console.log(solveRPN("20 4 /"))