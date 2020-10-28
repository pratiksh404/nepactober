# #import model as m
# #from model import hello
# import datetime
import os
# import sys
# sys.path.append('C:/Users/parja/OneDrive/Desktop')
# import out as m

# today = datetime.date.today()
# #os.mkdir("C:/Users/parja/OneDrive/Desktop/test1")
# #os.mkdir("C:/Users/parja/OneDrive/Desktop/test1/testreturns1")
# os.rmdir("C:/Users/parja/OneDrive/Desktop/test1/testreturns")
# print(today)

# print(dir(os))
# m.hello()
# #print(sys.path)

for dirname in os.walk("C:/Users/parja/OneDrive/Desktop"):
	print(dirname)