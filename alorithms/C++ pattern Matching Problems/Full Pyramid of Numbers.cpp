
#include <bits/stdc++.h>
using namespace std;

int main()
{
    int size_of_pyramid ;
    cin >> size_of_pyramid ;
    int spaces=size_of_pyramid-1,left = 1, right = 0, val = 0;
    while(size_of_pyramid--)
    {
        for(int i=0; i<spaces; i++)
            cout << "  ";
        for(int i=0; i<left; i++)
        {
            val++;
            cout << val << " " ;
        }
        for(int i=0; i<right; i++)
        {
            val--;
            cout << val << " ";
        }
        left++;
        right++;
        spaces--;
        cout << endl;
    }
    return 0;
}

