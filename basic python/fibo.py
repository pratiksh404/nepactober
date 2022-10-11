def fibo(n):
	if n<=1:	
		return n	
	else:
		return(fibo(n-1) + fibo(n-2))
n=int(input("enter no. of term:"))
print("fibonacci sequence:")
for i in range(n):
	print(fibo(i)),

