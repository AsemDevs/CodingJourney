import turtle

t = turtle.Turtle()
mood = input('What is your mood: ').lower()
sides = int(input('Enter n of sides'))


def star_mood():
    for side in range(sides):
        t.forward(100)
        t.right(720/sides)


if mood == 'happy':
        t.color('yellow')
        star_mood()
elif mood == 'sad':
        t.color('blue')
        star_mood()
elif mood == 'angry':
        t.color('red')
        star_mood()
turtle.exitonclick()
