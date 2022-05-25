user_in = ''
started = False
while True:
    user_in = input("Enter a command: ").upper()
    if user_in == 'START':
        if started:
            print('Car is already started!')
        else:
            started = True
            print('Car Started...Ready to go!')
    elif user_in == 'STOP':
        if not started:
            print('Car is already stopped!')
        else:
            started = False
            print('Car stoped.')
    elif user_in == 'HELP':
        print(f'''
Start - to start the car
Stop - to stop the car
Quit - to exit''')
    elif user_in == 'QUIT':
        break
    else:
        print("I don't understand that")
