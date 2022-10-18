#include <stdio.h>
int main()
{
  int row = 0,column = 0;
  int numberOfRows = 0;
  printf("Enter the number of rows: ");
  scanf("%u",&numberOfRows);
  for(row=1; row<=numberOfRows; ++row)
  {
    // This loop prints white spaces before first
    // star of each row
    for(column=row; column<numberOfRows; ++column)
    {
      printf(" ");
    }
    // This loop prints star in each row
    for(column=1; column<=row; ++column)
    {
      printf("*");
    }
    // Move the cursor to new line for next row
    printf("\n");
  }
  return 0;
}
