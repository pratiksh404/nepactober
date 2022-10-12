//C program to create simple calculator using Switch case
#include<stdio.h>
#include<math.h> 

int main() {

    char operator;
    double firstNumber,secondNumber;

    printf("Enter any one of operator (+, -, *,): ");
    scanf("%c", &operator);

    printf("Enter first operands: ");
    scanf("%lf", &firstNumber);
    
    printf("Enter Second operands: ");
    scanf("%lf", &secondNumber);

    switch(operator)
    {
        case '+':
            printf("%.1lf + %.1lf = %.1lf",firstNumber, secondNumber, firstNumber + secondNumber);
            break;

        case '-':
            printf("%.1lf - %.1lf = %.1lf",firstNumber, secondNumber, firstNumber - secondNumber);
            break;

        case '*':
            printf("%.1lf * %.1lf = %.1lf",firstNumber, secondNumber, firstNumber * secondNumber);
            break;

        case '/':
            printf("%.1lf / %.1lf = %.1lf",firstNumber, secondNumber, firstNumber / secondNumber);
            break;

        // operator doesn't match any case constant (+, -, *, /)
        default:
            printf("Error! operator is not correct");
    }
    
    return 0;
}