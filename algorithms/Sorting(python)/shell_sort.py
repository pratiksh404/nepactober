def shellSort(input_num_list):
    
    gap = len(input_num_list) // 2
    while gap > 0:

        for i in range(gap, len(input_num_list)):
            temp = input_num_list[i]
            j = i
# Sort the sub num_list for this gap

            while j >= gap and input_num_list[j - gap] > temp:
                input_num_list[j] = input_num_list[j - gap]
                j = j-gap
            input_num_list[j] = temp

# Reduce the gap for the next element

        gap = gap//2

num_list = [210,45,2,66,51,18,36,13,95]

shellSort(num_list)
print(num_list)