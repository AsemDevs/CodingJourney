## Node Module System

```
// function SayHello(name) {
//     console.log("Hello " + name);
// }
// SayHello("Asem");

// console.log(window.location.href);

// var message = "";
// console.log(global.message);

// var SayHello = function (name) {
// }
// window.SayHello("Asem");

console.log(); // Global object
setTimeout();
clearTimeout();
setInterval();
clearInterval();
```

```
var message = '';
global
```

- Every file in a node application is a node module
- period + slash to indicate the current folder
- we use the require function to load a module