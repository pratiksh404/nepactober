#include<iostream>
using namespace std;

// In this code we assume that -1 denote there is no value present.

int maxsize=100;  //Assume maximum size of array is 100.

int stack[100],top=-1;  //arrray used for storing element and top is used for retreving top value of stack.

bool push(int data){
    if(top==99) return false;
     stack[top+1]=data;
     top++;
     return true;
}

bool pop(){
     if(top==-1) return false;
     stack[top]=-1;   //-1 denote that there in no value at this position.
     top--; 
     return true;
}

int topelement(){
    if(top==-1) return -1;
    return stack[top];
}

void display(){
    int n=top;
    if(n>=0){
        cout<<stack[n]<<"<- Top"<<endl;
        n--;
    }
    while(n>=0){
        cout<<stack[n]<<endl;
        n--;
    }
    cout<<endl;
}

int main(){
    while(true){
        cout<<endl<<endl<<endl;
        cout<<"********************"<<endl;
        cout<<"Implementation of stack using array"<<endl;
        cout<<"Press 1 - Push element in stack"<<endl;
        cout<<"Press 2 - Pop element in stack"<<endl;
        cout<<"Press 3 - Top element in stack"<<endl;
        cout<<"Press 4 - Display element in stack"<<endl;
        cout<<"Press 5 - Stop"<<endl;

        cout<<endl<<endl<<endl;
        int press;
        cin>>press;
        bool check=false;
        switch (press)
        {
        case 1:
            int x;
            cout<<"Enter value of data"<<" "<<endl;
            cin>>x;
            if(push(x)){
                cout<<"Pushed the data"<<endl;
            }else{
                cout<<"Stack is full"<<endl;
            }
            break;
        case 2:
            if(pop()){
                cout<<"Successfully pop element"<<endl;
            }else{
                cout<<"Stack is empty"<<endl;
            }
            break;
        case 3:
            if(top==-1){
                cout<<"Stack is empty"<<endl;
            }else{
                cout<<"Top element of stack "<<topelement()<<endl;
            }
            break;
        case 4:
            cout<<"Element of stack"<<endl;
            display();
            break;
        case 5:
             check=true;
             break;     
        default:
            cout<<"Invalid press"<<endl;
            break;
        }
        if(check){
            break;
        }
    }
}
