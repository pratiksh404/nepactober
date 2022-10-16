//Majority Element
#include <bits/stdc++.h>
using namespace std;

int majorityElement(int a[], int n)
{
        int r=a[0],p=1;
        for(int i=1;i<n;i++)
        {
            if(a[i]==r)
            p++;
            else if(p>0)
            p--;
            else
            {
                p=1;
                r=a[i];
            }
        }
        if(p==0)
        return -1;
        int k=0;
        for(int i=0;i<n;i++)
        {
            if(a[i]==r)
            k++;
        }
        if(k>n/2)
        return r;
        return -1;
}
int main() {
    int n;
    cin>>n;
    int a[n];
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    cout<<majorityElement(a,n);
}
