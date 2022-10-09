def getNextGap(gap):
    gap = (gap * 10)//13
    if gap < 1:
        return 1
    return gap
 
def combSort(arr):
    n = len(arr)
    gap = n
    swapped = True

    while gap !=1 or swapped == 1:
        gap = getNextGap(gap)
        swapped = False
        for i in range(0, n-gap):
            if arr[i] > arr[i + gap]:
                arr[i], arr[i + gap]=arr[i + gap], arr[i]
                swapped = True
 
 
new_arr = [10, -1, 5, 12, 1]
print ("Unsorted array:", new_arr)
combSort(new_arr)
print ("Sorted array:", new_arr)

 