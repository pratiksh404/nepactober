#include<iostream>
#include<bits/stdc++.h>
using namespace std ;
void prism_brute(vector<pair<int,int>> adj[],int src,int v){



    vector<int> parent(v,-1),key_dist(v,INT_MAX);
    vector<bool> mst(v,false);
    key_dist[src]=0;
    // mst[src]=true;
    parent[src]=-1;
    for(int i=0;i<v-1;i++){
        int min_value=INT_MAX,value;
        for(int i=0;i<v;i++){
            if( !mst[i] and min_value>key_dist[i]){
                value=i;
                min_value=key_dist[i];
            }

        }
        mst[value]=true;
        for( auto s: adj[value]){
            int val=s.first;
            int weight=s.second;
            if(!mst[val] and weight<key_dist[val]){
                parent[val]=value;
                key_dist[val]=weight;
            }
        }
    }
    for(int i=0;i<v;i++){
        (parent[i]==-1)?cout<<i<<" "<<"Parent"<<endl:cout<<i<<" "<<parent[i]<<endl;
    }
// time complexity=    >o(n*n) greater than n^2 as n for outer and n for mini. value finding and some what time for adjancey matrix iteration 
}
 void prism_optimized(vector<pair<int,int>> adj[],int src,int v){
    vector<int> key_dist(v,INT_MAX),parent(v,-1);
    vector<bool> mst(v,false);
    key_dist[src]=0;
    // to reduce inside n loop to find mini key_dist we can us min heap which will 
    //always give min. amongs the avialable values on bases of key_dist value
    priority_queue <pair<int,int>, vector<pair<int,int>>, greater<pair<int,int>>> min_heap;
    min_heap.push({0,src});
    while(!min_heap.empty())
    {
        auto help=min_heap.top();
        min_heap.pop();
        mst[help.second]=true;
        for(auto s:adj[help.second]){
            if(!mst[s.first] and key_dist[s.first]>s.second){
            key_dist[s.first]=s.second;
            parent[s.first]=help.second;
            min_heap.push({key_dist[s.first],s.first});
            }
        }

    }
    for(int i=0;i<v;i++){
        (parent[i]==-1)?cout<<i<<" "<<"Parent"<<endl:cout<<i<<" "<<parent[i]<<endl;
    }
    // time complexity will be now vlogv types logv for insertion in min_heap so time complexity finalyy is (e+ vlogv)
 }


int main(){
int e,v;
cin>>e>>v;
vector<pair<int,int>> adj[v];
for(int i=0;i<e;i++){
int u,v,w;
cin>>u>>v>>w;
adj[u].push_back({v,w});

adj[v].push_back({u,w});
}
int src;
cin>>src;
prism_optimized(adj,src,v);
return 0;
}
