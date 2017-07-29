/*
Multiple Values for a Key
You will be given input lines, each holding two elements separated by a space: a key and value. You need to store the given values to the given keys. At the last line of the input you will receive a key.
Your task is to print all the values corresponding to that key. If there are no such, just print “None”.
 */

function multipleValuesForAKey(pairs) {
    "use strict";

    let arr = {};

    for (let i = 0; i < pairs.length - 1; i++) {
        let pair = pairs[i].split(' ');

        if (!arr[pair[0]]) {
            arr[pair[0]] = [];
        }

        arr[pair[0]].push(pair[1]);
    }

    if (arr[pairs[pairs.length - 1]]) {
        console.log(arr[pairs[pairs.length - 1]].join("\n"));
    } else {
        console.log("None");
    }
}

multipleValuesForAKey(['key value', 'key eulav', 'test tset', 'key']); // value / eulav
console.log();
multipleValuesForAKey(['3 test', '3 test1', '4 test2', '4 test3', '4 test5', '4']); // test2 / test3 / test5
console.log();
multipleValuesForAKey(['3 bla', '3 alb', '2']); // None