#using cache
cache_fibo={}
def fibonacci(n):
	#if we have cached the value then return it
	if n in cache_fibo:
		return cache_fibo[n]
	#complete the nth term
	if n==1:
		value=1
	elif n==2:
		value=1
	elif n>2:
		value=fibonacci(n-1)+fibonacci(n-2)
	#first of all cache the value and return 1
	cache_fibo[n]=value	
	return value
for n in range(3,11):
	print(fibonacci(n))				
