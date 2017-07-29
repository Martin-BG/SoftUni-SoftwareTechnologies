/*
Set Values to Indexes in an Array
You will be given N – an integer specifying the length of an array. Then you will start receiving an index and a value. For each received line you must set the value at the given index to the given value.
When you’ve processed all input data, print the array’s elements each on a new line.
 */

function setValuesToIndexesInAnArray(arr) {
    "use strict";

    let count = Number(arr[0]);
    let values = new Array(count).fill(0);

    for (let i = 1; i < arr.length; i++) {
        let pair = arr[i].split(" - ").map(Number);

        values[pair[0]] = pair[1];
    }

    console.log(values.join('\n'));
}

setValuesToIndexesInAnArray(['3', '0 - 5', '1 - 6', '2 - 7']);
console.log();
setValuesToIndexesInAnArray(['2', '0 - 5', '0 - 6', '0 - 7']);
console.log();
setValuesToIndexesInAnArray(['5', '0 - 3', '3 - -1', '4 - 2']);