/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */

/*
Given an array of integers nums and an integer target,
return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution,
and you may not use the same element twice.
You can return the answer in any order.

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
*/

var nums = [1, 5, 8, 15];
var target = 23;
var twoSum = function(nums, target) {
    for(var i = 0; i < nums.length; i++) {
        for(var j = i + 1; j < nums.length; j++) {
            if (target == nums[i] + nums[j]) {
                return [i, j];
            }
        }
    }
};
var result = twoSum(nums, target);
console.log(result);