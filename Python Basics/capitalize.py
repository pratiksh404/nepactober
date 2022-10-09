def capitalize(s):
    s = " " + s
    str = ""
    for i in range(len(s)):
        if s[i-1] == " ":
            if s[i].isalpha():
                str = str + s[i].upper()
            else:
                str = str + s[i]
        else:
            str = str + s[i]
    return str.strip()
