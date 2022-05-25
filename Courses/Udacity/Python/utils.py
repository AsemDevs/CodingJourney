def find_max(numbers):
    maximum = numbers[0]
    for number in numbers:
        if number > maximum:
            maximum = number
    print(maximum)


# from utils import find_max
# numbers = input("Enter numbers:").split(' ')
# print(numbers)
# find_max(numbers)
