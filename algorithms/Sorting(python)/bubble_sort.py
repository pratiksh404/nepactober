def bubblesort(num_list):

    for iter_num in range(len(num_list)-1,0,-1):
        for idx in range(iter_num):
            if num_list[idx]>num_list[idx+1]:
                temp = num_list[idx]
                num_list[idx] = num_list[idx+1]
                num_list[idx+1] = temp


num_list = [2,0,45,7,25,63,100,45,50]
bubblesort(num_list)
print(num_list)