#include <bits/stdc++.h>
using namespace std;

int main()
{
    int size_of_pyramid;
    cin >> size_of_pyramid ;
    for(int i=size_of_pyramid; i>0; i--)
    {
        for(int j=0; j<i; j++){
        cout << "*";}
        cout << endl;
    }
    return 0;
}

