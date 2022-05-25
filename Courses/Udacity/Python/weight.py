weight = float(input('Enter Your Weight: '))
type = input('(L) or (K)')
if type.upper() == 'K':
    type = 'lbs'
    weight = weight * 2.20462
elif type.upper() == 'L':
    type = 'kg'
    weight = weight / 2.20462
print(f'You are {weight} {type}')
