#include <bits/stdc++.h>
using namespace std;
#define ll long long


void print(unordered_map<int,string> &m)
{
    cout << m.size() <<endl;
    for(auto &pr:m)
    {
        cout<<pr.first<<" "<<pr.second<<endl;
    }
}

int main()
{
    unordered_map<int, string> m;
    m[1]="foo";
    m[2 ]="bar";
    m[3]="baz";
    m[4]="qux";
    m[5]="werty";
    print(m);
    
    return 0;
}