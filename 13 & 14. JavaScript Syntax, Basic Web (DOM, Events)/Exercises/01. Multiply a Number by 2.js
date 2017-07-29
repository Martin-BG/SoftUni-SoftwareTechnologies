/*
Multiply a Number by 2
You are given a number N. Create a JS function that multiplies the number by 2 and prints the result. The input comes as an array of strings.
 */

function multiplyNumberByTwo(nums) {
    "use strict";

    let num = Number(nums[0]);

    return num * 2;
}

console.log(multiplyNumberByTwo(["2"])); // 4
console.log(multiplyNumberByTwo(["3"])); // 6
console.log(multiplyNumberByTwo(["30"])); // 60
console.log(multiplyNumberByTwo(["13"])); // 26