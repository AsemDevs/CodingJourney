# Js Notes

```js
let name = 'Asem'
let interestRate = 0.3;
interestRate = 1;
// variable can change after reassinging
const interestRate = 4;
```

------------------------

## Two types

1- permitive / value types
2- Reference Types
**types**

* String
* Number
* Boolean
* Undefined
* null

## Output to screen

```js
console.log('Hello World');
document.write('Hello World');
window.alert('Hello World');
```

## Console Methods

```js
//log
console.log('Log');
//error
console.error('Error');
// table
console.table(['Asem', 'Ahmed', 'Ali']);
//Directive
console.log('%c Hello %cWorld', 'color:red; font-size:30px;', 'color:blue; font-size:30px;');

//read about *web api* https://developer.mozilla.org/en-US/docs/Web/API/Console_API
```

## What Is ECMAScript?

```js
// ECMAScript is a specification for a standard programming language.
// To follow a specific a standard.
//http://es6-features.org/#Constants
var myName = 'Asem';
console.log(`Hello ${myName}`); 
```

## Data Types

```js
// String
// Number
// Boolean
// Undefined
// null
// Object
// Obkject => Array
let name = 'Asem';
console.log(typeof myName);

console.log ("Osama Mohamed" );
console.log (typeof. "Osama Mohamed ") ;
console.log (typeof 5000) ;
console.log (typeof 5000.99)
console.log (typeof "10");
console.log (typeof true);
console.log(typeof [10, 20, 30]);
console.log(typeof {name: 'Asem', age: 25, city: 'Cairo'});
```

## Variables

```js

// JavaScript is a dynamic language
// JavaScript is a loosely typed language
let myName = 'Asem';
console.log(myName);

console.log(hello); // from html id=hello

//var, let, const
//var => function scope, window scope
//let => block scope, not in window scope
//const => block scope

// var redeclares a variable yes
// let does not redeclare a variable
// const does not redeclare a variable


```

```html
<div id="hello">Hello World</div>
```

## Escape Characters

```js
// \n => new line
// \t => tab
// \ => backslash
```

## Template Literals

```js
let Name = 'Asem';
let markUp = `
  <div>
    <h1>Hello ${Name}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>
  </div>
`;
```

## Expressions and operators

### Ternary Operator

*The conditional (ternary) operator is the only JavaScript operator that takes three operands: a condition followed by a question mark (?), then an expression to execute if the condition is truthy followed by a colon (:), and finally the expression to execute if the condition is falsy. This operator is frequently used as an alternative to an if...else statement.*
  
  ```js
  let x = 5;
  let y = 10;
  let z = x < y ? x : y;
  ```

### Logical Operators

```js
&& - and
|| - or
!  - not
```

## Statements and declarations

### If...Else

```js
if (condition) {
  // code here
} else {
  // code here
}
```

### Switch Statements

```js
switch(expression) {
  case x:
    // code block
    break;
  case y:
    // code block
    break;
  default:
    // code block
}
// When JavaScript reaches a break keyword, it breaks out of the switch block.
// The default keyword specifies the code to run if there is no case match.
```

### Arthimetic Operators

```js
//unary operators
++x; // increment x by 1
--x; // decrement x by 1
+x; // returns the value of x

console.log(+"100"); // 1

Number("100"); // 100
```

### Methods

```js
Number("100"); // 100
toString(); // returns a string representation of the number
toFixed(2); // returns a string representation of the number with 2 decimal places
parseInt(); // returns an integer representation of the string
parseFloat(); // returns a floating point representation of the string
isInteger(); // returns true if the number is an integer
isNaN(); // returns true if the number is not a number
isFinite(); // returns true if the number is finite
trunc(); // returns the integer part of the number 
```

### Strings

```js
var abc = "abcdefghijklmnopqrstuvwxyz";
var esc = 'I don\'t \n know';   // \n new line
var len = abc.length;           // string length
abc.indexOf("lmno");            // find substring, -1 if doesn't contain 
abc.lastIndexOf("lmno");        // last occurance
abc.slice(3, 6);                // cuts out "def", negative values count from behind
abc.replace("abc","123");       // find and replace, takes regular expressions
abc.toUpperCase();              // convert to upper case
abc.toLowerCase();              // convert to lower case
abc.concat(" ", str2);          // abc + " " + str2
abc.charAt(2);                  // character at index: "c"
abc[2];                         // unsafe, abc[2] = "C" doesn't work
abc.charCodeAt(2);              // character code at index: "c" -> 99
abc.split(",");                 // splitting a string on commas gives an array
abc.split("");                  // splitting on characters
128.toString(16);               // number to hex(16), octal (8) or binary (2)
```

## References

### Arrays

```js
const cars = ['Ford', 'Chevy', 'Honda', 'Toyota'];

concat() // joins two or more arrays and returns a copy of the joined arrays
copyWithin() // copies array elements within the array, to and from specified positions
entries() // returns a key/value pair Array Iterator object
every() // tests whether all elements in the array pass the test implemented by the provided function

var dogs = ["Bulldog", "Beagle", "Labrador"]; 
var dogs = new Array("Bulldog", "Beagle", "Labrador");  // declaration

alert(dogs[1]);             // access value at index, first item being [0]
dogs[0] = "Bull Terier";    // change the first item

for (var i = 0; i < dogs.length; i++) {     // parsing with array.length
console.log(dogs[i]);
}
Methods
dogs.toString();                        // convert to string: results "Bulldog,Beagle,Labrador"
dogs.join(" * ");                       // join: "Bulldog * Beagle * Labrador"
dogs.pop();                             // remove last element
dogs.push("Chihuahua");                 // add new element to the end
dogs[dogs.length] = "Chihuahua";        // the same as push
dogs.shift();                           // remove first element
dogs.unshift("Chihuahua");              // add new element to the beginning
delete dogs[0];                         // change element to undefined (not recommended)
dogs.splice(2, 0, "Pug", "Boxer");      // add elements (where, how many to remove, element list)
var animals = dogs.concat(cats,birds);  // join two arrays (dogs followed by cats and birds)
dogs.slice(1,4);                        // elements from [1] to [4-1]
dogs.sort();                            // sort string alphabetically
dogs.reverse();                         // sort string in descending order
x.sort(function(a, b){return a - b});   // numeric sort
x.sort(function(a, b){return b - a});   // numeric descending sort
highest = x[0];                         // first item in sorted array is the lowest (or highest) value
x.sort(function(a, b){return 0.5 - Math.random()});     // random order sort
```

#### every()

```js
//syntax: array.every(function(currentValue, index, arr), thisValue)
const ages = [12, 17, 8, 21, 14, 11];
function checkAdult(age) {
  return age >= 18;
}
console.log(ages.every(checkAdult)); // false
```
