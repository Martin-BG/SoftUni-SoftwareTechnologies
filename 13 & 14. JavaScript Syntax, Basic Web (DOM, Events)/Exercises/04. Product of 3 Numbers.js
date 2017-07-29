/*
Product of 3 Numbers
You are given a number X, Y and Z. Create a JS function that finds if X * Y * Z (the product) is negative or positive. Try to do this WITHOUT multiplying the 3 numbers.
 */

function productOf3Numbers(nums) {
    "use strict";
    let negativeNumbers = 0;
    let zeroFound = false;

    for (let num of nums) {
        if (Number(num) < 0) {
            negativeNumbers++;
        }

        if (Number(num) === 0) {
            zeroFound = true;
            break;
        }
    }

    if (zeroFound || negativeNumbers % 2 === 0) {
        return "Positive";
    } else {
        return "Negative";
    }
}

console.log(productOf3Numbers(["2", "3", "-1"])); // Negative
console.log(productOf3Numbers(["5", "4", "3"])); // Positive
console.log(productOf3Numbers(["-3", "-4", "5"])); // Positive
console.log(productOf3Numbers(["2", "0", "-1"])); // Positive