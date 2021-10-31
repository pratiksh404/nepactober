#include <iostream>
#include <string.h>
using namespace std;

string to_binary(int n)
{
    string binary = "";
    while (n > 0)
    {
        if ((n & 1) == 0)
            binary = '0' + binary;
        else
            binary = '1' + binary;

        n >>= 1;
    }
    return binary;
}

int to_number(string s)
{
    int number = 0;
    int n = s.length();
    for (int i = 0; i < n; i++)
        if (s[i] == '1')
            number += (1 << (n - 1 - i));

    return number;
}

int main()
{

    string binary = to_binary(7);
    cout << binary << endl;

    int number = to_number("111");
    cout << number << endl;
    return 0;
}