#include <stdio.h>
#include <stdlib.h>

int main() {
  char ch[500];

  // File pointer
  FILE *fptr;

  // Open the file beginnersbook.txt in 'w' mode
  // Here 'w' represents the writing mode.
  fptr = fopen("beginnersbook.txt", "w");

  // If fptr is NULL then the file didn't open successfully
  if (fptr == NULL) {
    printf("Error! File cannot be opened");
    //exit the program
    exit(1);
  }
  printf("Enter sentence that you would like to write:\n");
  fgets(ch, sizeof(ch), stdin);
  fprintf(fptr, "%s", ch);
  fclose(fptr);
  return 0;
}
