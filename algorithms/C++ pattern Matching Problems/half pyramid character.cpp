#include <bits/stdc++.h>
using namespace std;

int main()
{
    int size_of_pyramid;

    cin >> size_of_pyramid ;
    for(int i=0; i<size_of_pyramid; i++)
    {
        char alphabet = 'A';
        for(int j=0; j<=i; j++){
        cout << alphabet;
        alphabet++;}
        cout << endl;
    }
    return 0;
}
