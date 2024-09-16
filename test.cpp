#include <bits/stdc++.h>
using namespace std;
#define ll long long

void solve()
{
    ll num1, num2;
    cin >> num1 >> num2;
    if ((num1 == 1 && num2 == 2) || (num1 == 2 && num2 == 1))
    {
        cout << "3" << endl;
    }
    else if ((num1 == 1 && num2 == 3) || (num1 == 3 && num2 == 1))
    {
        cout << "2" << endl;
    }
    else if ((num1 == 2 && num2 == 3) || (num1 == 3 && num2 == 2))
    {
        cout << "1" << endl;
    }
}

int main()
{
    ll t;
    cin >> t;
    while (t--)
    {
        solve();
    }
    return 0;
}
