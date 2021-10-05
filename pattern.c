/*                            4 4 4 4 4 4 4  
                              4 3 3 3 3 3 4   
                              4 3 2 2 2 3 4   
                              4 3 2 1 2 3 4   
                              4 3 2 2 2 3 4   
                              4 3 3 3 3 3 4   
                              4 4 4 4 4 4 4         */

#include <stdio.h>
#include <string.h>
#include <math.h>
#include <stdlib.h>

int main() 
{
    int n,m,i,j,c,k=0;
    scanf("%d", &n);
    for(i=1;i<=n;i++)
    {
        c=n+1;
        c=c-i;
        m=n;
        while (c < n)
        {
            printf("%d ",m);
            m--;
            c++;
        }
            for (j = 1; j <= 2*m-1; j++)
                printf("%d ",m);
        c=n+1;
        c=c-i;
        while (c < n)
        {
            c++;
            printf("%d ",c);   
        }
        printf("\n");
    }
    for(i=n-1;i>=1;i--)
    {
        c=n+1;
        c=c-i;
        m=n;
        while (c < n)
        {
            printf("%d ",m);
            m--;
            c++;
        }
            for (j = 1; j <= 2*m-1; j++)
                printf("%d ",m);
        c=n+1;
        c=c-i;
        while (c < n)
        {
            c++;
            printf("%d ",c);   
        }
        printf("\n");
    }
    return 0;
}

