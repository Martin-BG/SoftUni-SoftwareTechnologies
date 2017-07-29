/*
Parse JSON Objects
You will be given input lines (text) holding object data in JSON format. Use the JSON.parse(str) function to parse the data into JavaScript objects, and then print them as shown in the examples.
 */

function parseJsonObjects(objects) {
    "use strict";

    let persons = objects.map(JSON.parse);

    function printPerson(person) {
        console.log(
            `Name: ${person.name}\n` +
            `Age: ${person.age}\n` +
            `Date: ${person.date}`
        );
    }

    persons.map(printPerson);
}

parseJsonObjects(['{"name":"Gosho","age":10,"date":"19/06/2005"}', '{"name":"Tosho","age":11,"date":"04/04/2005"}']);

/*
Name: Gosho
Age: 10
Date: 19/06/2005
Name: Tosho
Age: 11
Date: 04/04/2005
 */