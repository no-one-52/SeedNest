#include <bits/stdc++.h>
using namespace std;
#define ll long long
#define endl "\n"

int main()
{
    ios_base::sync_with_stdio(false);
    cin.tie(NULL);

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
    else
    {
        cout << "1" << endl;
    }
    return 0;
}