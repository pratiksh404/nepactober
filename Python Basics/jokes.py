import pyjokes
    
while(1):
    joke = pyjokes.get_joke(language="en", category="twister")
    print(joke, end="\n")
    cont = input("Another one? (y/n):")
    if cont == 'n':
        break

print("Thank you!!")