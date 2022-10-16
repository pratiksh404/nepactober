//Stickler Thief
#include <bits/stdc++.h>
using namespace std;
typedef long long int ll;

class Solution
{
    public:
    int FindMaxSum(int a[], int n)
    {   int p=0,k=0;
        int dp[n];
        dp[0]=a[0];
        dp[1]=max(a[0],a[1]);
        dp[2]=max(a[0]+a[2],a[1]);
        for(int i=3;i<n;i++)
        {
            dp[i]=max(dp[i-2]+a[i],dp[i-1]);
        }
        return dp[n-1];
    }
};

int main()
{
    
	int t;
	cin>>t;
	while(t--)
	{
		int n;
		cin>>n;
		int a[n];
		for(int i=0;i<n;++i)
			cin>>a[i];
		Solution ob;
		cout<<ob.FindMaxSum(a,n)<<endl;
	}
	return 0;
}
