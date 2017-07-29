/*
Storing Objects
You will be given input lines, each holding information about a student: name, age and grade. The data comes in the following format:
“{name} -> {age} -> {grade}”
Store the information from the input lines into JS objects.
Print the objects in their order of appearance, in the format:

Name: {name}
Age: {age}
Grade: {grade}

 */

function storingObjects(objects) {
    "use strict";

    function parseStudent(str) {
        str = str.split(" -> ");
        return {
            name: str[0],
            age: Number(str[1]),
            grade: Number(str[2])
        };
    }

    let students = objects.map(parseStudent);

    function printStudent(student) {
        console.log(
            `Name: ${student.name}\n` +
            `Age: ${student.age}\n` +
            `Grade: ${student.grade.toFixed(2)}`
        );
    }

    students.map(printStudent);
}

storingObjects(['Pesho -> 13 -> 6.00', 'Ivan -> 12 -> 5.57', 'Toni -> 13 -> 4.90']);

/*
Name: Pesho
Age: 13
Grade: 6.00
Name: Ivan
Age: 12
Grade: 5.57
Name: Toni
Age: 13
Grade: 4.90
*/