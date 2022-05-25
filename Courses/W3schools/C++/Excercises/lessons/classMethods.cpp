#include <iostream>
using namespace std;


//Inside Example

/*
class MyClass {
    public:
        void myMethod() {
            cout << "Hello World!";
        }
};

int main() {
    MyClass myObj;
    myObj.myMethod();
    return 0;

}
*/

// Outside Example
/*
class MyClass {
    public:
        void myMethod(); //Method Declaration
};


// Method definition outside the class
void MyClass::myMethod() {
    cout << "Hello World!";
}

int main() {

    MyClass myObj; // Create an Object
    myObj.myMethod(); //Call the method

    return 0;
}

*/