/*
Working with Key-Value Pairs
You will be given input lines, each holding two elements separated by a space. The first is the key and the second is the value.
Your task is to store the value for each key. If a key already exists, you need to replace the old value with the new one. At the last line of input, you will receive a key.
Print the value corresponding to that key. If there is no such, print “None”.
 */

function workingWithKeyValuePairs(pairs) {
    "use strict";

    let arr = {};

    for (let i = 0; i < pairs.length - 1; i++) {
        let pair = pairs[i].split(' ');

        arr[pair[0]] = pair[1];
    }

    if (arr[pairs[pairs.length - 1]]) {
        console.log(arr[pairs[pairs.length - 1]]);
    } else {
        console.log("None");
    }
}

workingWithKeyValuePairs(['key value', 'key eulav', 'test tset', 'key']); // eulav
console.log();
workingWithKeyValuePairs(['3 test', '3 test1', '4 test2', '4 test3', '4 test5', '4']); // test5
console.log();
workingWithKeyValuePairs(['3 bla', '3 alb', '2']); // None
