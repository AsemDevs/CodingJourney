class father:
    def __init__(self, fname, lname):
        self.fname = fname
        self.lname = lname

    def pout(self):
        print(f"My name is {self.fname} {self.lname}!")


x = father('Hamdi', 'Abdu')
x.pout()


class child(father):
    def __init__(self, fname, lname, year):
        father.__init__(self, fname, lname)
        self.year = year

    def pout(self):
        print(f'Welcome {self.fname} {self.lname} to the class of {self.year}')


y = child('Assem', 'Hamdi', 2021)
y.pout()
x.pout()
