import turtle
import math
draw = turtle.Turtle()
draw.width(2)
draw.color('orange')

links = range(8)
sides = input("Enter number of sides")
x = 360 / int(sides)

draw.penup()
draw.back(80)
draw.pendown()

for link in links:
    for side in sides:
        draw.forward(50)
        draw.left(x)

    draw.penup()
    draw.forward(20)
    draw.left(60)
    draw.pendown()
draw.hideturtle()
turtle.exitonclick()
