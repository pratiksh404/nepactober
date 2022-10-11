#include<bits/stdc++.h>
using namespace std;

struct btnode{
struct btnode * lc;
int c;
struct btnode * rc;
};

typedef struct btnode * btptr;

struct Stack{
 int size;
 int top;
 btptr elements[50];
};

typedef struct Stack * sptr;

void push(struct Stack *s,btptr x)
{
    if(s->top==(s->size-1))
    {cout<<"stack is full"<<endl;}
    else
        {s->elements[++s->top]=x;}

}
btptr pop(struct Stack *s)
{
    if(s->top==-1)
    {cout<<"stack is empty"<<endl;return 0;}
    else{
        return (s->elements[s->top--]);}
}
btptr peep(struct Stack *s)
{
    if(s->top==-1)
    {cout<<"stack is empty"<<endl;return 0;}
      else
      {return (s->elements[s->top]);}
}

void insert(btptr & T,int c)
{
    int ch;
    if(T==NULL)
    {
        T=new(btnode);
        T->c=c;
        T->lc=NULL;
        T->rc=NULL;
    }

    cin>>ch;
    if(ch!=0){insert(T->lc,ch);}

    cin>>ch;
    if(ch!=0){insert(T->rc,ch);}
}



void ancestor(btptr T,int k)
{

   if(T!=NULL)
   {
       sptr s=new(Stack);
       s->top=-1;
       s->size=100;
       push(s,T);
       while(s->top!=-1)
       {
           btptr t=peep(s);
          // pop(s);
          cout<<t->c<<endl;
          if(t->c==k){
            break;
          }
           if(t->rc!=NULL)
           {
               push(s,t->rc);
           }
           if(t->lc!=NULL)
           {
               push(s,t->lc);
           }
           if(t->rc==NULL && t->lc==NULL){btptr temp=pop(s);
           if(peep(s)->lc==temp || peep(s)->rc==temp && (peep(s)->lc==NULL ||peep(s)->rc==NULL))
              {
                  btptr te=pop(s);
                  while(peep(s)->rc==te)
                  {
                      te=pop(s);
                  }
              }
       }
       }
       while(s->top!=-1)
       {

           cout<<pop(s)->c<<" ";
       }
       cout<<endl;
       }


}
int main()
{
      int n;
      cin>>n;
      btptr T=NULL;
      insert(T,n);

     ancestor(T,10);
}
