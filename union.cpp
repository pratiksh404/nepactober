#include <iostream>
#include<bits/stdc++.h>
using namespace std;
class union_find{
int *rank,*parent;
public:
int size;
union_find(int size){
  this->size=size;
  rank=new int[size];
  parent=new int[size];
  for(int i=0;i<size;i++){
    rank[i]=0;
    parent[i]=i;
  }
}
void Union(int a,int b)
{
  a=parentOf(a);
  b=parentOf(b);
  if(rank[a]==rank[b]){
    parent[b]=a;
    rank[a]+=1;
  }
  else if(rank[a]>rank[b]){
    parent[b]=a;
  }
  else{
    parent[a]=b;
  }
}
int parentOf(int val)
{
  // time complexity =O(height of tree) worst case O(n) skew tree
  if(parent[val]==val){return val;}
  return parent[val] = parentOf(parent[val]);
}
bool is_same_comp(int a,int b){
  return parentOf(a)==parentOf(b);
}
int* get_rank(){
  return rank;
}
int* get_parent(){
  return parent;
}
void print(int *arr)
{
for(int i=0;i<size;i++){
  cout<<arr[i]<<" ";
}  
}
};
int main() {
  std::cout << "Hello World!\n";
  union_find u(8);
  u.Union(1,2);
  u.Union(2,3);
  u.Union(4,5);
  u.Union(6,7);
  u.Union(5,6);
  u.Union(3,7);
  // cout<<u.parentOf(2)<<" "<<u.parentOf(7)<<endl;
  int *rank=u.get_rank();
  int *parent=u.get_parent();cout<<endl;
  cout<<"is both of same component :->"<<u.is_same_comp(2,6);
  cout<<"\nRank array:->";
  u.print(rank);
  cout<<"\nParent array:->";
  u.print(parent);
  cout<<endl;

}
