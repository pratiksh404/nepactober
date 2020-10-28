# class variables
# variables shared among all the instances of a class
# instance variables can be unique like name,email and pay 
# class variables should be same for all instances

class Employee:
	no_of_emp = 0
	raise_amount = 1.05
	def __init__(self,first,last,pay):
		self.first = first
		self.last = last
		self.pay = pay
		self.email = first +'.'+ last + '@gmail.com'
		Employee.no_of_emp += 1

	def pay_raise(self):
		self.pay = int(self.pay +self.raise_amount)
		return "Empty"
# 	def fullname(self):
# 		return ("{} {}".format(self.first,self.last))

emp1 = Employee('n','bista',2000)
emp2 = Employee('n','thapa',6000)
emp3 = Employee('n','thapa',6000)
emp3.raise_amount = 1.2
print(emp3.raise_amount)
print(Employee.__dict__)
print(emp3.raise_amount)
print(emp3.__dict__)


# print(Employee.__doc__)

# print(emp3.pay_raise())

