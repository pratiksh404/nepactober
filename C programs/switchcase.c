#include <stdio.h>

int main()
{
    int num1, num2;

    /* Input two numbers from user */
    printf("Enter two numbers to find maximum: ");
    scanf("%d%d", &num1, &num2);

    /* Expression (num1 > num2) will return either 0 or 1 */
    switch(num1 > num2)
    {   
        /* If condition (num1>num2) is false */
        case 0: 
            printf("%d is maximum", num2);
            break;

        /* If condition (num1>num2) is true */
        case 1: 
            printf("%d is maximum", num1);
            break;
    }

    return 0;
}
