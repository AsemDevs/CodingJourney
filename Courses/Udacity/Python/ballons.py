import turtle


def Ballon(t, color):
    t.speed(0)
    t.color(color)

    # draw a ballon
    for side in range(30):
        t.forward(15)
        t.left(12)
    t.right(60)

    # draw a knot
    for side in range(3):
        t.forward(10)
        t.right(120)
    t.color('gray')
    t.right(30)
    t.forward(100)


t = turtle.Turtle()

t.penup()
t.back(100)
t.pendown()
Ballon(t, 'blue')

t.penup()
t.home()
t.pendown()
Ballon(t, 'blue')

t.penup()
t.home()
t.forward(100)
t.pendown()
Ballon(t, 'blue')
turtle.exitonclick()
