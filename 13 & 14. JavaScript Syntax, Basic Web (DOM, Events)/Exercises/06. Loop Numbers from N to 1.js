/*
Print Numbers from N to 1
You are given a number N. Create a JS function that loops through all the numbers from N to 1 and prints them. N will always be positive.
 */

function printNumbersFromNTo1(nums) {
    "use strict";

    var num = Number(nums[0]);

    while (num > 0) {
        console.log(num--);
    }
}

printNumbersFromNTo1(["5"]);
console.log("");
printNumbersFromNTo1(["2"]);