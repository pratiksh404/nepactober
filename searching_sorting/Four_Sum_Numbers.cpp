//Find All Four Sum Numbers
#include <bits/stdc++.h>
using namespace std;


class Solution{
    public:
    vector<vector<int>> fourSum(vector<int> &a, int k) {
        int n=a.size();
        sort(a.begin(),a.end());
        vector<vector<int>> f;
        for(int i=0;i<n;i++)
        {   if(i!=0 && a[i]==a[i-1])
            continue;
           
            for(int j=i+1;j<n;j++)
            {    
                if(j!=i+1  && a[j-1]==a[j])
                continue;
                //cout<<j<<endl;
                int p=k-a[i]-a[j];
                int l=j+1,r=n-1;
                while(l<r)
                {   if(l!=j+1 && a[l-1]==a[l])
                    {
                        l++;
                        continue;
                    }
                    if(r!=n-1 && a[r]==a[r+1])
                    {
                        r--;
                        continue;
                    }
                    if(a[l]+a[r]<p)
                    l++;
                    else if(a[l]+a[r]>p)
                    r--;
                    else
                    {   vector<int> v;
                        v.push_back(a[i]);
                        v.push_back(a[j]);
                        v.push_back(a[l]);
                        v.push_back(a[r]);
                        f.push_back(v);
                        l++;
                        r--;
                    }
                }
            }
        }
        sort(f.begin(),f.end());
        return f;
    }
};


int main() {
    int t;
    cin >> t;
    while (t--) {
        int n, k, i;
        cin >> n >> k;
        vector<int> a(n);
        for (i = 0; i < n; i++) {
            cin >> a[i];
        }
        Solution ob;
        vector<vector<int> > ans = ob.fourSum(a, k);
        for (auto &v : ans) {
            for (int &u : v) {
                cout << u << " ";
            }
            cout << "$";
        }
        if (ans.empty()) {
            cout << -1;
        }
        cout << "\n";
    }
    return 0;
}

