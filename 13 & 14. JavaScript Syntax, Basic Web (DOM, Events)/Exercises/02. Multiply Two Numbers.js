/*
Multiply Two Numbers
You are given a number X and a number Y. Create a JS function that multiplies X * Y and prints the result. The input comes as array of strings.
 */

function multiplyTwoNumbers(nums) {
    "use strict";

    let num1 = Number(nums[0]);
    let num2 = Number(nums[1]);

    return num1 * num2;
}

console.log(multiplyTwoNumbers(["2", "3"])); // 6
console.log(multiplyTwoNumbers(["13", "13"])); // 169
console.log(multiplyTwoNumbers(["1", "2"])); // 2
console.log(multiplyTwoNumbers(["0", "50"])); // 0