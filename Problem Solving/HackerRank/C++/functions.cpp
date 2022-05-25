#include <iostream>
#include <cstdio>
#include <cmath>
using namespace std;

/*
Add `int max_of_four(int a, int b, int c, int d)` here.
*/

int main() {
    int a, b, c, d;
    scanf("%d %d %d %d", &a, &b, &c, &d);
    int max1 = max(a, b);
    int max2 = max(max1, c);
    int max3 = max(max2, d);
    printf("%d", max3);
    
    return 0;
}