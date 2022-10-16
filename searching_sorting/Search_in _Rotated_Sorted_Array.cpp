//Search in Rotated Sorted Array
#include <bits/stdc++.h>
using namespace std;

int search(vector<int>& nums, int target) {
    int l=0,r=nums.size()-1;
    while(l<=r)
    {
        int mid=(l+r)/2;
        if(nums[mid]==target)
            return mid;
        else if(nums[mid]>=nums[l])
        {
            if(nums[mid]>target && nums[l]<=target)
                r=mid-1;
            else
            l=mid+1;
        }
        else
        {
            if(nums[mid]<target && nums[r]>=target)
                l=mid+1;
            else
            r=mid-1; 
        }
    }
    return -1;
}
int main() {
    int n;
    cin>>n;
    vector<int> arr;
    for(int i=0;i<n;i++)
    {
        int a;
        cin>>a;
        arr.push_back(a);
    }
    int target;
    cin>>target;
    cout<<search(arr,target);
}
