/**
 * @param {number} x
 * @return {boolean}
 */
 let rev = 0;
 let lastDigit;
  var isPalindrome = function(x) {
    const len = Math.ceil(Math.log10(x + 1));
     if (x >= 0) {
         let num = x;
        while(num !== 0) {
            if (len <= 2) {
                lastDigit = num/10;
            }else {
                lastDigit = num % 10;
            }
            rev = rev * 10 + lastDigit;
            num = Math.floor(num/10);
        }
        if (x == rev) {
            return true;
        }else {
            return false;
        }
     }else {
         return false;
     }
 };
 console.log(isPalindrome(0));
