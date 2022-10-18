//Count Inversions
#include <bits/stdc++.h>
using namespace std;

class Solution{
  public:
    long long int merge(long long int a[], long long int b[],long long int l,long long int mid,long long int r)
    {   long long int invco=0,i=l,j=mid,k=l;
        while(i<mid && j<=r)
        {
            if(a[i]>a[j])
            {
                b[k]=a[j];
                invco+=mid-i;k++;j++;
            }
            else
            {
                b[k]=a[i];k++;i++;
            }
        }
        while(i<mid)
        {
            b[k]=a[i];i++;k++;
        }
        while(j<=r)
        {
            b[k]=a[j];k++;j++;
        }
        for(i=l;i<=r;i++)
        a[i]=b[i];
        return invco;
    }
    long long int  mergesort(long long int a[], long long int b[],long long int l,long long int r)
    {   long long int invco=0;
        if(l<r)
        {   long long int mid=(l+r)/2;
            invco+=mergesort(a,b,l,mid);
            invco+=mergesort(a,b,mid+1,r);
            invco+=merge(a,b,l,mid+1,r);
        }
        return invco;
    }
    long long int inversionCount(long long a[], long long n)
    {  long long int b[n];
       long long int p=mergesort(a,b,0,n-1);
       
       
       return p;
    }
  
};


int main() {
    
    long long T;
    cin >> T;
    
    while(T--){
        long long N;
        cin >> N;
        
        long long A[N];
        for(long long i = 0;i<N;i++){
            cin >> A[i];
        }
        Solution obj;
        cout << obj.inversionCount(A,N) << endl;
    }
    
    return 0;
}