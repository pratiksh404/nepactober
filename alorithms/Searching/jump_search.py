import math

def JumpSearch (num_list, value):
    length_of_list = len(num_list)
    jump = int(math.sqrt(length_of_list))
    left, right = 0, 0
    while left < length_of_list and num_list[left] <= value:
        right = min(length_of_list - 1, left + jump)
        if num_list[left] <= value and num_list[right] >= value:
            break
        left += jump;
    if left >= length_of_list or num_list[left] > value:
        return -1
    right = min(length_of_list - 1, right)
    i = left
    while i <= right and num_list[i] <= value:
        if num_list[i] == value:
            return i
        i += 1
    return -1

num_list =[1,2,3,4,5,6,7,8,9]
value = 5

index =JumpSearch(num_list,value)


print(f'The value {value} is at index {index+1} of list {num_list}')