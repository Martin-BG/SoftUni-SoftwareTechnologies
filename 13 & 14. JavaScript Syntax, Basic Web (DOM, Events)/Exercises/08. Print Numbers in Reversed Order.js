/*
Print Numbers in Reversed Order
You will be given a few numbers as input. You need to print them in reversed order, each on a new line.
 */

function printNumbersInReversedOrder(nums) {
    "use strict";

    let reversed = nums.reverse();

    for (let num of reversed) {
        console.log(num);
    }
}

printNumbersInReversedOrder(['10', '15', '20']);
console.log();
printNumbersInReversedOrder(['5', '5.5', '24', '-3']);
console.log();
printNumbersInReversedOrder(['20', '1', '20', '1', '20']);