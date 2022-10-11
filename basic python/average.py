n=int(input("enter the no. of element you want:"))
a=[]
for i in range(0,n):
	elem=int(input("enter element:"))
	a.append(elem)
average=sum(a)/n
print("average of element in the list",round(average,2))	