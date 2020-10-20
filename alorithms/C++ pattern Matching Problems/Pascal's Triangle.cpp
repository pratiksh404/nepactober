#include <bits/stdc++.h>
using namespace std;

int main()
{
    int heightOfTriangle;
    cin >> heightOfTriangle;
    int spaces = heightOfTriangle-1,rowiseItems = 1, coef=1;
    for(int i=0; i<heightOfTriangle; i++)
    {
        for(int i=0; i<spaces; i++)
            cout << "  ";
        for(int j=0; j<=i; j++)
        {
            if (j == 0 || i == 0)
                coef = 1;
            else
                coef = coef*(i-j+1)/j;

            cout << coef << "   ";
        }
        cout << endl;
        spaces--;
    }


    return 0;
}
