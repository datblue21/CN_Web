#include <iostream>
using namespace std;
main()
{
    int max, m, arr[100], f[100], n;
    m=0;
    cin >> n;
    for (int i = 0; i < n; i++)
    {
        cin >> arr[i];
    }
    f[0] = 1;
    for (int i = 1; i < n; i++)
    {
        max = 0;
        for (int j = 0; j < i; j++)
        {
            if (arr[i] > arr[j] && max < f[j])
                max = f[j];
        }
        f[i] = max + 1;
    }
    for (int i = 0; i < n; i++)
    {
        if (m < f[i])
        {
            m = f[i];
        }
    }

}