#include<bits/stdc++.h>
using namespace std;
bool isBalanced(string s,int n)
{
	stack<char> st;
	char c;
	for(int i=0;i<n;i++)
	{
		if((s[i]=='(')||(s[i]=='{')||(s[i]=='['))
		{
			st.push(s[i]);
			continue;
		}
		if(st.empty())
		return false;
		switch(s[i])
		{
			case ')':c=st.top();
			st.pop();
			if(c!='(')
			return false;
			break;
			case '}':c=st.top();
			st.pop();
			if(c!='{')
			return false;
			break;
			case ']':c=st.top();
			st.pop();
			if(c!='[')
			return false;
			break;
		}
	}
	if(st.empty())
	return true;
	return false;
}
int main()
{
	string s;
	cin>>s;
	if(isBalanced(s,s.size()))
	cout<<"Balanced paranthesis"<<endl;
	else
	cout<<"Not Balanced paranthesis"<<endl;
	return 0;
}
