import datetime
today=datetime.date.today()
print(today)

import os
print('dir',os)

#os.rmdir("C:/Users/Sazan/Desktop/hey/123")
#os.mkdir("C:/Users/Sazan/Desktop/hey/123")
#os.makedirs("C:/Users/Sazan/Desktop/12/1")
for dirpath,dirname in os.walk("C:/Users/Sazan/Desktop"):
	print(dirname)
