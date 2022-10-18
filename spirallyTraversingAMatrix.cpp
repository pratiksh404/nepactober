#include <bits/stdc++.h>
using namespace std;

class Solution
{
public:
    vector<int> spirallyTraverse(vector<vector<int>> matrix, int r, int c)
    {
        vector<int> res;
        int top = 0;
        int bottom = r - 1;
        int left = 0;
        int right = c - 1;
        int dir = 0;
        while (top <= bottom && left <= right)
        {
            if (dir == 0)
            {
                for (int i = left; i <= right; i++)
                {
                    res.push_back(matrix[top][i]);
                }
                top++;
            }
            else if (dir == 1)
            {
                for (int i = top; i <= bottom; i++)
                {
                    res.push_back(matrix[i][right]);
                }
                right--;
            }
            else if (dir == 2)
            {
                for (int i = right; i >= left; i--)
                {
                    res.push_back(matrix[bottom][i]);
                }
                bottom--;
            }
            else if (dir == 3)
            {
                for (int i = bottom; i >= top; i--)
                {
                    res.push_back(matrix[i][left]);
                }
                left++;
            }
            dir = (dir + 1) % 4;
        }
        return res;
    }
};

int main()
{
    int t;
    cin >> t;
    while (t--)
    {
        int r, c;
        cin >> r >> c;
        vector<vector<int>> matrix(r);
        for (int i = 0; i < r; i++)
        {
            matrix[i].assign(c, 0);
            for (int j = 0; j < c; j++)
            {
                cin >> matrix[i][j];
            }
        }
        Solution ob;
        vector<int> result = ob.spirallyTraverse(matrix, r, c);
        for (int i = 0; i < result.size(); i++)
        {
            cout << result[i] << " ";
        }
        cout << endl;
    }
    return 0;
}