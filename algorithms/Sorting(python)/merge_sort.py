def merge_sort(num_list):
    if len(num_list) <= 1:
        return num_list

    middle = len(num_list) // 2
    left_list = num_list[:middle]
    right_list = num_list[middle:]

    left_list = merge_sort(left_list)
    right_list = merge_sort(right_list)
    return list(merge(left_list, right_list))


def merge(left_half,right_half):

    res = []
    while len(left_half) != 0 and len(right_half) != 0:
        if left_half[0] < right_half[0]:
            res.append(left_half[0])
            left_half.remove(left_half[0])
        else:
            res.append(right_half[0])
            right_half.remove(right_half[0])
    if len(left_half) == 0:
        res = res + right_half
    else:
        res = res + left_half
    return res

num_list = [45,14,68,95,3,21,102,12]

print(merge_sort(num_list))