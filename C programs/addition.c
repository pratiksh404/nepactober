#include<stdio.h>
#include<conio.h>
void main()
{
       int num1,num2,sum;
       clrscr();
       printf("Enter number 1:");
       scanf("%d",&num1);
       printf("Enter number 2:");
       scanf("%d",&num2);
       sum=num1+num2;
       printf("Sum of %d and %d is = %d.",num1,num2,sum);
       getch();
}
