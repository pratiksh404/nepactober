name="sazan"
length=len(name)
i=0

for n in range(-1,(-length-1),-1):
	print(name[i],"\t",name[n])
	i+=1

hey="arc"*5
print(hey)

str1="apkzube"
str2="apk"
str3="zube"
str4="dude"

print('example of in operator:')
print(str2 in str1)
print(str3 in str1)
print(str4 in str1)
print("apkzube"=="apkzube")
print("apkzube">="Apkzude")
print("a"<"A")


str10="my name is sazan singh ngakhusi."
print(str10[2:14])
print(str10[-1::-1])
print(str10[4:10:4])