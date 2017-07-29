/*
Turn Object into JSON String
You will be given input lines holding information about an object in the format “key -> value“. Create a JS object and save these keys and values in it.
After you’ve processed all the input data, print the JSON version of the object. Use the JSON.stringify(obj) function.
 */

function objectToJsonString(object) {
    "use strict";

    let student = {};

    object.map(pair => pair.split(' -> '))
        .forEach(studentTokens => {
            let key = studentTokens[0];
            let value = isNaN(studentTokens[1]) ?
            studentTokens[1] : Number(studentTokens[1]);
            student[key] = value;
        });

    console.log(JSON.stringify(student));
}

objectToJsonString(["name -> Angel", "surname -> Georgiev", "age -> 20", "grade -> 6.00", "date -> 23/05/1995", "town -> Sofia"]);

/*
{"name":"Angel","surname":"Georgiev","age":20,"grade":6,"date":"19/05/1995","town":"Sofia"}
 */