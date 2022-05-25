# Js Notes

let name = 'Asem'
let interestRate = 0.3;
interestRate = 1;
// variable can change after reassinging
const interestRate = 4;

* Will not change

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

## Expressions and operators

### Ternary Operator

*The conditional (ternary) operator is the only JavaScript operator that takes three operands: a condition followed by a question mark (?), then an expression to execute if the condition is truthy followed by a colon (:), and finally the expression to execute if the condition is falsy. This operator is frequently used as an alternative to an if...else statement.*
  
  ```js
  let x = 5;
  let y = 10;
  let z = x < y ? x : y;
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
