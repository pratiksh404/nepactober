/* Contributed a Palindrome Check Program using Stack Push and Pop
A palindrome is a word, sentence, verse, or even number that reads the same backward or forward.
 It derives from Greek roots that literally mean “running back” 
 (palin is “again, back,” and dromos, “running.”) 
The word appears to have been created in English based on these roots in the early 1600s.*/


#include <stdio.h>
#include <stdlib.h>
#include<string.h>

int n = 100, top = -1;
int stringLength(char *s)
{
    int count = 0;
    while (*s != '\0')
    {
        count++;
        s++;
    }
    return count;
}
void push(char arr[], char element)
{
    {
        top++;
        arr[top] = element;
    }
}
char pop(char arr[])
{
    {
        char element = arr[top];
        top--;
        return element;
    }
}
void display(char arr[])
{
    int i;
    for (i = 0; i <= top; i++)
    {
        printf("%c ", arr[i]);
    }
}
int main()
{
    int p = 0;
    int l, i;
    char s[100];
    char arr[n];
    char element;
    printf("\n\nEnter the String: ");
    gets(s);
    l = strlen(s);
    for (i = 0; i < (l / 2); i++)
    {
        push(arr, s[i]);
    }
    for (i = (l / 2) + 1; i < l; i++)
    {
        if (pop(arr) != s[i])
        {
            printf("\nNo,It is not a palndrome\n\n");
            break;
        }
        else
        {
            p = 1;
        }
    }
    if (p == 1)
    {
        printf("\nYes,It's a palndrome\n\n");
    }
    return 0;
}
