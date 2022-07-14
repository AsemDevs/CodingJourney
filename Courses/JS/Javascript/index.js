// let name = 'Asem'
// let interestRate = 0.3;
// interestRate = 1;
// // variable can change after reassinging 
// const interestRate = 4; 
// * Will not change
// ------------------------

// ## Two types
// 1- permitive / value types
// 2- Reference Types
// **types**
// - String
// - Number
// - Boolean
// - Undefined
// - null
// ## Js is a dynamic Typing language

// let name = 'Asem'; //String Literal
// let age = 30; //Number Literal
// let = isApproved; //Bolean Literal

// ## Objects
/*
 let person = {
    name: 'Asem',
    age: 25
};

//Bracket Notation
let selection = 'name';
person[selection] = 'Mary';

console.log(person)
*/

/*
let selectedColors = ['red', 'blue']; //Array Literal

selectedColors[2] = 'orange';

console.log(selectedColors);
*/


//performing a task
// function greet(name, lastName) { //Function parameter
//     console.log('Hello ' + name + ' ' + lastName);
// }

// greet('Asem', 'Abdou'); //Add and Argument supplied to function's parameter
// greet('Basel', 'Abdou');

// Calculate a Value

//Testing Ground

// entries()
/* const cars = ['Ford', 'Chevy', 'Honda', 'Toyota'];
const c = cars.entries()
for (let x of c) {
  document.getElementById("root").innerHTML += "<br>" + x;
} */

//every()
/* const survey = [
  { name: "Steve", answer: "Yes"},
  { name: "Jessica", answer: "Yes"},
  { name: "Peter", answer: "Yes"},
  { name: "Elaine", answer: "No"}
];

let result = survey.every(isSameAnswer);

function isSameAnswer(el, index, arr) {
  if (index === 0) {
    return true;
  } else {
    return (el.answer === arr[index - 1].answer);
  }
  console.log(el.answer);

} */

// Algo Expert
/* 1- twoNumberSum
function twoNumberSum(array, targetSum) {
    // Write your code here.
  let output = [];
  for (let i = 0; i < array.length; i++) {
    for (let j = i + 1; j < array.length; j++) {
      if (targetSum - array[i] === array[j]) {
        output = [array[i], array[j]];
      } else {
        output = [];
      }
    }
  }

  console.log( output );
}
twoNumberSum([3, 5, -4, 8, 11, 1, -1, 6], 10);
*/
// 1- twoNumberSum2
/* function twoNumberSum(array, targetSum) {
  // Write your code here.

  for (let i = 0; i < array.length; i++) {
    for (let j = i + 1; j < array.length; j++) {
      if (array[j] + array[i] === targetSum ) {
        var compi =+ array[i]
        return [array[i], array[j]];
      }

    }
  }
  console.log(compi);

  return [];

} */

// Validate Subsequence

/* array = [5, 1, 22, 25, 6, -1, 8, 10];
sequence = [-1, 6, 1, 10];
isSubset = (array, sequence) => sequence.every(element => array.includes(element))
console.log(isSubset([array], [sequence])); 
 */

/* const isSubset = (array1, array2) => array2.every(element => array1.includes(element));

console.log(isSubset([1, 2, 3, 4, 5, 6, 7], [5, 7, 6])); // true
console.log(isSubset([1, 2, 3, 4, 5, 6, 7], [5, 8, 7])); // false
 */

/* window.onload = function() {
  document.querySelector('h1').innerHTML = 'Hello World';
}
 */

// console.log('%c Hello %cWorld', 'color:red; font-size:30px;', 'color:blue; font-size:30px;');
/* 
let myName = 'Asem';
console.log(typeof myName); */

// console.log(root);

/* var test = 100
console.log(+test); // 1 */

/* array = [5, 1, 22, 25, 6, -1, 8, 10];
sequence = [-1, 6, 1, 10];

function isValidSubsequence(array, sequence) {
  // Write your code here.
  var arrayIndx = 0;
  var sequenceIndx = 0;
  while (arrayIndx < array.length && sequenceIndx < sequence.length) {
    if (array[arrayIndx] === sequence[sequenceIndx]) sequenceIndx++;
    arrayIndx++;
  }
  return sequenceIndx === sequence.length;
} */

// 3-
 array = [1, 2, 3, 5, 6, 8, 9];

 function sortedSquaredArray(array) {
  // Write your code here.
  var squaredArray = [];
  for (let elem of array) {
    squaredArray.push(Math.pow(elem, 2))
  }
  console.log(squaredArray.sort((a, b) => a - b));
}

sortedSquaredArray([1, 2, 3, 5, 6, 8, 9]);
