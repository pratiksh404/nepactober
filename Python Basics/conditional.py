#use OF FOR LOOP
country = ['Nepal','Braz','Mexico','England']
# for x in country:
#     if x =='Nepal':
#         print('It is in  Asia')
#     elif x =='Brazil':
#         print('It is in South America')
#     elif x =='Mexico':
#         print('It is in North America')
#     elif x =='England':
#         print('It is in Europe')
#     else:
#         print('It is out of this world')
#Use Of While Loop
# input('Enter your name')

# i=0
# while i<10:
#     print(i)
#     i=i+1
# Use of nested for loop
# for num in range(1,4):
#     for letter in 'abc':
#         print(num,letter)
#print values between 1000 and 2000 in which both are divisible by 5 & 7
for num in range(1000,2000):
    if num%5 == 0 and num%7 == 0:
        print(num)
    else:
        continue
