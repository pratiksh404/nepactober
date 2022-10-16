//Find Pair with Given Difference
#include <bits/stdc++.h>
using namespace std;

bool bse(int a[], int n,int ans)
{
    int l=0,r=n-1;
    while(l<=r)
    {
        int mid=(l+r)/2;
        if(a[mid]==ans)
        return true;
        if(a[mid]>ans)
        r=mid-1;
        else
        l=mid+1;
    }
    if(a[l]==ans)
    return true;
    return false;
}
bool findPair(int a[], int size, int n){
   sort(a,a+size);
   for(int i=0;i<size;i++)
   {
       if(bse(a,size,a[i]+n))
       return true;
       if(bse(a,size,a[i]-n))
       return true;
   }
   return false;
}

int main() {
    int n,sum;
    cin>>n>>sum;
    int a[n];
    for(int i=0;i<n;i++)
    {
        cin>>a[i];
    }
    cout<<findPair(a,n,sum);
}
