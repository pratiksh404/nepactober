#include <stdio.h>
int main() {
  int row, column, numberOfRows=8;
  for(row=0; row<numberOfRows; row++)
  {
    for(column=0; column<=row; column++)
    {
      printf("* ");
    }
    //This is just to print the stars in new line after each row
    printf("\n");
  }
  return 0;
}
