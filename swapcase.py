s = input('enter a string')
op = ''
for ch in s:
    if ch.islower():
        op+= ch.upper()
    elif ch.isupper():
        op+= ch.lower()
    else:
        op+=ch
print(op)