#include <stdio.h>
#include <stdlib.h>
int main() {
  char ch[1000];
  FILE *fptr;
  if ((fptr = fopen("beginnersbook.txt", "r")) == NULL) {
    printf("Error! File does not exist.");
    // beginnersbook.txt exits if the file pointer returns NULL.
    exit(1);
  }

  // reading text using fscanf() till a new line is
  // encountered and printed the same line using printf()
  fscanf(fptr, "%[^\n]", ch);
  printf("Data from the file:\n%s", ch);
  fclose(fptr);

  return 0;
}
