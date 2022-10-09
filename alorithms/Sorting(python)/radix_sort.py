def countingSort(arr, exp1):

	n = len(arr)
	output = [0] * (n)
	count = [0] * (10)

	for i in range(0, n):
		index = arr[i] // exp1
		count[index % 10] += 1

	for i in range(1, 10):
		count[i] += count[i - 1]

	i = n - 1
	while i >= 0:
		index = arr[i] // exp1
		output[count[index % 10] - 1] = arr[i]
		count[index % 10] -= 1
		i -= 1

	i = 0
	for i in range(0, len(arr)):
		arr[i] = output[i]

def radixSort(arr):

	temp_max = max(arr)
	exp = 1
	while temp_max / exp >= 1:
		countingSort(arr, exp)
		exp *= 10


new_arr = [10, -1, 5, 12, 1]
print ("Unsorted array:", new_arr)
radixSort(new_arr)
print ("Sorted array:", new_arr)
