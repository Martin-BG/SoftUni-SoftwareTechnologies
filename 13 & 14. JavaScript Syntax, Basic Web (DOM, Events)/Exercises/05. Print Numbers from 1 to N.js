/*
Print Numbers from 1 to N
You are given a number N. Create a JS function that loops through all the numbers from 1 to N and prints them. N will always be positive.
 */

function printNumbersFrom1ToN(nums) {
    "use strict";

    let num = Number(nums[0]);

    for (let i = 1; i <= num; i++) {
        console.log(i);
    }
}

printNumbersFrom1ToN(["5"]);
console.log();
printNumbersFrom1ToN(["2"]);