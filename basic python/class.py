#classes and instances
#class=> blue print

# class Employees:
# 	pass
# #instances n class(object)	
# emp1 = Employees()
# emp2 = Employees()

# #print(emp1)
# #print(emp2)

# emp1.first='sazan'
# emp1.last='singh'
# emp1.pay='200'
# emp1.email='sazansingh10@gmail.com'

# emp2.first='pragtya'
# emp2.last='...........'
# emp2.pay='200'
# emp2.email='...............@gmail.com'

# print(emp1.first,emp1.last)
# #print(emp2)

class Employees:
	def __init__(self,first,last,pay):
		self.first='sazan'
		self.last='singh'
		self.pay=1000
		self.email=first+'.'+last+'gmail.com'

	def fullname(self):
		return "{} {}".format(self.first,self.last)

emp1 = Employees('n','sazan',10000)
emp2 = Employees('s','singh',10000)
print(emp1.pay)
print(emp1.fullname())
#print(Employees.fullname(emp1))
