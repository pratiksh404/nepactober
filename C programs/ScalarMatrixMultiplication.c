#include <stdio.h>
#define SIZE 3
int main(void)
{
    int matrix[SIZE][SIZE], i, j, n;
    printf("Enter the value of %dX%d Matrix: \n", SIZE, SIZE);
    for (i = 0; i < SIZE; i++)
    {
        for (j = 0; j < SIZE; j++)
        {
            scanf("%d", &matrix[i][j]);
        }
    }
    printf("Enter Multiplier: ");
    scanf("%d", &n);
    for (i = 0; i < SIZE; i++)
    {
        for (j = 0; j < SIZE; j++)
        {
            matrix[i][j] *= n;
        }
    }
    printf("Resultant Matrix: \n");
    for (i = 0; i < SIZE; i++)
    {
        for (j = 0; j < SIZE; j++)
        {
            printf("%d ", matrix[i][j]);
        }
        printf("\n");
    }
}