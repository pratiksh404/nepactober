//Find Missing And Repeating
#include <bits/stdc++.h>
using namespace std;

int *findTwoElement(int *a, int n) {
       int r=0,s=0;
       for(int i=0;i<n;i++)
       {
           int p=abs(a[i])-1;
           if(a[p]>0)
           a[p]=-a[p];
           else
           r=p+1;
       }
       for(int i=0;i<n;i++)
       {
           if(a[i]>=0)
           {
               s=i+1;
               break;
           }
       }
       int b[2];
       b[0]=r;
       b[1]=s;
       int* p=b;
       cout<<r<<" "<<s<<endl;
       return p;
    }
int main() {
    int n;
    cin>>n;
    int a[n];
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    findTwoElement(a,n);
}
