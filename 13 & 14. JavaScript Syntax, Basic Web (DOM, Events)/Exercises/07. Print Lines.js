/*
Print Lines
You will be, continuously, given input lines, until you receive the command “Stop”. Print each of those lines at the moment you read them, until you reach the ending command. Do NOT print the ending command.
 */

function printLines(lines) {
    "use strict";

    for (let line of lines) {
        if (line === "Stop") {
            break;
        }

        console.log(line);
    }
}

printLines(['Line 1', 'Line 2', 'Line 3', 'Stop']);
console.log();
printLines(['3', '6', '5', '4', 'Stop', '10', '12']);