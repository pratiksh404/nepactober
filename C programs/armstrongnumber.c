//A number is armstrong number when, sum of a number's digits raised to the power total number of digits is armstrong number.
//Armstrong numbers example: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 153, 370, 371, 407, 1634 etc

#include <stdio.h>
#include <math.h>

int main()
{
   int n, sum = 0, t, remainder;
   printf("\nPlease enter a number to find whether it is an armstrong or not : ");
   scanf("%d",&n);
   t = n;
   while( t != 0 )
   {
      remainder = t%10;
      sum = sum + remainder*remainder*remainder;
      t = t/10;
   }
   if ( n == sum )
      printf("\nThe number %d is an armstrong number", n);
   else
      printf("\nThe number %d is not an armstrong number", n);
   return 0;

}