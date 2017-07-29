/*
Multiply / Divide a Number by a Given Second Number
You are given a number N and a number X. Create a JS function that:
Multiplies N * X if X is greater than or equal to N
Divides N / X if N is greater than X
The input comes as array of strings.
*/

function multiplyOrDivide(nums) {
    "use strict";
    let num1 = Number(nums[0]);
    let num2 = Number(nums[1]);

    return (num2 >= num1) ? num1 * num2 : num1 / num2;
}

console.log(multiplyOrDivide(["2", "3"])); // 6
console.log(multiplyOrDivide(["13", "13"])); // 169
console.log(multiplyOrDivide(["3", "2"])); // 1.5
console.log(multiplyOrDivide(["144", "12"])); // 12