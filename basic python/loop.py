# #conditional and loops
# #if
# #if-else
# #if else if(multiple condition)
# countries=['nepal','china','japan','usa']
# # country=input('enter country name:')
# # print(dir(countries))
# for country in countries:
# 	if country=='nepal':
# 		print('jay nepal')
# 	elif(country=='japan'):
# 		print('asia')
# 	elif( country=='usa'):
# 		print('North America')	
# 	else:
# 		print('not so much')
# i=5
# while i<10:
# 	print(i)
# 	i+=1
# for x in range(1,3):
# 	for y in 'AB':
# 		print(x,y)

#print value betn 1000 and 2000 in which both are divided by 5 and 7
for x in range(1000,2000):
	if(x%5==0 and x%7==0):
		print('Happy number is:', x)
