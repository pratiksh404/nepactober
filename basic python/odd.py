list1=[1,2,3,4,5,6,7,8,9]
def function(n):
	for n in list1:
		print(n)
		if(n%2==0):
			print('even')
		else:
			print('odd')
function(list1)		