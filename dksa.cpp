#include<iostream>
#include<bits/stdc++.h>
using namespace std ;
#define V 9
int find_min(int dist[],bool visited[],int v){
    int min_dis=INT_MAX;
    int min_index=0;
    for(int i=0;i<v;i++){
        if( !visited[i] and  min_dis>=dist[i]){
            min_dis=dist[i];
            min_index=i;
                    
                    }
                    
    }
    return min_index;
}
void get_shortest_dist(int adj[V][V],int src,int v){
    int dist[v];
    for(int i=0;i<v;i++)dist[i]=INT_MAX;
    dist[src]=0;
    bool visited[v];
    // visited[src]=true;
    for(int i=0;i<v;i++)visited[i]=false;
    for(int i=0;i<v-1;i++){
        int index=find_min(dist,visited,v);
        visited[index]=true;
        for(int i=0;i<V;i++){
            if(dist[index] !=INT_MAX and dist[i]>(dist[index]+adj[index][i]) and !visited[i] ){
                dist[i]=(dist[index]+adj[index][i]);
                cout<<"hello\n";
            }
            
        }

    }
    for(int i=0;i<v;i++){cout<<i<<" "<<dist[i]<<endl;}
}
int main(){
int graph[V][V] = { { 0, 4, 0, 0, 0, 0, 0, 8, 0 },
						{ 4, 0, 8, 0, 0, 0, 0, 11, 0 },
						{ 0, 8, 0, 7, 0, 4, 0, 0, 2 },
						{ 0, 0, 7, 0, 9, 14, 0, 0, 0 },
						{ 0, 0, 0, 9, 0, 10, 0, 0, 0 },
						{ 0, 0, 4, 14, 10, 0, 2, 0, 0 },
						{ 0, 0, 0, 0, 0, 2, 0, 1, 6 },
						{ 8, 11, 0, 0, 0, 0, 1, 0, 7 },
						{ 0, 0, 2, 0, 0, 0, 6, 7, 0 } };
 

get_shortest_dist(graph,0,V);
return 0;
}

