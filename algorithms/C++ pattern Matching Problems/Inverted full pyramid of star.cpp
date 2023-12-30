
#include <bits/stdc++.h>
using namespace std;

int main()
{
    int size_of_pyramid ;
    cin >> size_of_pyramid ;
    int spaces=0, stars = 2*size_of_pyramid-1;
    while(size_of_pyramid--)
    {
        for(int i=0; i<spaces; i++)
            cout << "  ";
        for(int i=0; i<stars; i++)
            cout << "* ";
        cout << endl;
        spaces++;
        stars-=2;
    }
    return 0;
}

