
#include<bits/stdc++.h>
using namespace std;
void insertTemp(stack<int>&s,int temp)
{
    if(s.size()==0)
    {
        s.push(temp);
        return;
    }
    int val = s.top();
    s.pop();
    insertTemp(s,temp);
    s.push(val);
    return;

}
void reverseStack(stack<int>&s)
{
    if(s.size()==1)
        return;
    int temp = s.top();
    s.pop();
    reverseStack(s);
    insertTemp(s,temp);
}


int main()
{
    stack<int>s;
    int n;
    cin >> n;
    for(int i=0; i<n; i++)
    {
        int x;
        cin >> x;
        s.push(x);
    }
    reverseStack(s);
    for(int i=0; i<n; i++)
    {
        cout << s.top() << " ";
        s.pop();
    }
    return 0;
}

