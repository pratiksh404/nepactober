class Employee:
	def __init__(self,first,last,pay):
		self.first = first
		self.last = last
		self.email = first +"."+ last + "@gmail.com"

	def fullname(self):
		return "{} {}".format(self.first,self.last)

#creating instances of class
# object
emp1 = Employee('n','bista','2000')
emp2 = Employee('s','Shakya','201010')
print(emp1.first)
print(emp1.fullname())
#instances of class(object)


# print(emp1)
# print(emp2)
# emp1.first = 'paras'
# emp1.last = 'Khadka'
# emp1.pay = 20000
# emp1.email = "alskfj@asja.com"

# emp2.first = 'New Paras'
# emp2.last = 'Khadka'
# emp2.pay = 2000000000000
# emp2.email = "alskfj@asja.com"
# print(emp1.first)
# print(emp1.last)
# print(emp1.pay)
# print(emp1.email)

# print(emp2.first)
# print(emp2.last)
# print(emp2.pay)
# print(emp2.email)
