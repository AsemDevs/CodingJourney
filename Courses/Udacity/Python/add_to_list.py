import time


def no_repeating(word):
    words = []
    exist = True
    while True:
        command = input('> ').lower()
        if command == 'add':
            if word in words:
                if exist:
                    print('You told me that word')
            else:
                if word not in words:
                    print(word)
                    words.append(word)
                    print(words)
                    exist = False
        elif command == 'quit':
            break


no_repeating(input('Enter a word: '))
