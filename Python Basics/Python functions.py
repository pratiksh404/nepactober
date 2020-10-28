a="Hello World Is a first Program"
print(a)
print(dir(a)) 
#print((a))
#convert to upper
print(a.upper())
#convert to lower
print(a.lower())
#outputs type of data
print(type(a))
#Replace data 
print(a.replace('a','was'))
#counts data
print(a.count('o'))
#Counts Length
#if 
if 5>1:
	print('True')
else:
	print('False')
#SwapCase
print(a.swapcase())
str1='Hello'
str2 = 'World Returns'
str3 = str1+' '+str2

print(str3)
print(f'{str1} {str2}')
print('{} {}'.format(str1,str2))
print(str1[:2])