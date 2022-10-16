// Count triplets with sum smaller than X
#include <bits/stdc++.h>
using namespace std;

class Solution{

	public:
	long long countTriplets(long long a[], int n, long long sum)
	{  int c=0;
	   sort(a,a+n);
	   for(int i=0;i<n-2;i++)
	   {
	       int l=i+1,r=n-1,p=sum-a[i];
	       while(l<r)
	       {
	           if(a[l]+a[r]>=p)
	           {
	               r--;
	           }
	           else
	           {  
	              c+=r-l;
	              l++;
	           }
	       }
	   }
	   return c;
	}
		 
};

int main() 
{
   	int t;
    cin >> t;
    while (t--)
    {
    	int n;
    	long long sum;
        cin>>n>>sum;
        long long arr[n];
        for(int i=0;i<n;i++){
            cin>>arr[i];
        }
        Solution ob;
        cout << ob.countTriplets(arr, n, sum)<<endl ;     
    }
    return 0;
}
