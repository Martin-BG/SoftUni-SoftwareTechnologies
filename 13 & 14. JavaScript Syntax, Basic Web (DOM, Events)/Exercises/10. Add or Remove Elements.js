/*
Add / Remove Elements
You will be given a sequence of commands (pairs of elements separated by a space): command and argument. You start by an empty array.
- The command “add {number}” appends the number to the array.
- The command “remove {index}” removes the element at the specified index. If the index is nonexistent, ignore that input line. When an element is deleted, all elements on the right from it, go one position left.
When you process all input data, print the array’s elements each on a separate line.
 */

function addOrRemoveElements(commands) {
    "use strict";

    let arr = [];

    for (let command of commands) {
        let pair = command.split(' ');
        let cmnd = pair[0];
        let value = Number(pair[1]);

        switch (cmnd) {
            case "add":
                arr.push(value);
                break;
            case "remove":
                if (value < arr.length) {
                    arr.splice(value, 1);
                }
                break;
            default:
                break;
        }
    }

    console.log(arr.join('\n'));
}

addOrRemoveElements(['add 3', 'add 5', 'add 7']);
console.log();
addOrRemoveElements(['add 3', 'add 5', 'remove 1', 'add 2']);
console.log();
addOrRemoveElements(['add 3', 'add 5', 'remove 2', 'remove 0', 'add 7']);