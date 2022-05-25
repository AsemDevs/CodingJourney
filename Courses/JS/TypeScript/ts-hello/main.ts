/* let Keyword makes the varianle block scope based,
which elimiate errors when you go along the way in your project.
*/

function doSomething() {
    for (var i = 0; i < 5; i++) {
        console.log(i);
    }
    console.log('Finally: ' + i);
}
doSomething();