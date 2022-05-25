import turtle


def triangle(color, start):

    t = turtle.Turtle()
    t.width(5)
    t.color(color)
    t.right(start)
    for shape in range(6):
        for side in range(3):
            t.forward(100)
            t.right(120)
        t.right(15)


triangle('red', 0)
triangle('orange', 120)
triangle('blue', 240)
