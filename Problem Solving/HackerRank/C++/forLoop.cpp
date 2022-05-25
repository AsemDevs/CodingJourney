#include <iostream>
#include <cstdio>
using namespace std;

/*
    - two positive integers [a, b]
    - a <= b
    - if n >= 1 and n <= 9 then print english presentation of the word.
    - else if n > 9 and it is even number, print "even"
    - else if n > 9 and it is odd number, print "odd"
*/



int main() {
    int a, b;
    string nums[9] = {"one", "two", "three", "four", "five", "six", "seven", "eight", "nine"};

    cin >> a >> b;

    for (int i = a; i <= b; i++){
        if (i > 9){
            cout << (i % 2 ? "odd" : "even") << endl;
        }else {
            cout << nums[i-1] << endl;
        }
    }

    return 0;
}

