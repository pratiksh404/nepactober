def selection_sort(input_list):
    for idx in range(len(input_list)):

        min_idx = idx
        for j in range( idx +1, len(input_list)):
            if input_list[min_idx] > input_list[j]:
                min_idx = j 

        input_list[idx], input_list[min_idx] = input_list[min_idx], input_list[idx]


num_list = [21,4,30,25,9,105,66,85,12]
selection_sort(num_list)
print(num_list)