def binarySearch(arr, left, right, x):
	if right >= left:
		mid = left + ( right - left ) // 2
		
		if arr[mid] == x:
			return mid

		if arr[mid] > x:
			return binarySearch(arr, left, mid - 1, x)

		return binarySearch(arr, mid + 1, right, x)
		
	return -1

def exponentialSearch(arr, n, x):

	if arr[0] == x:
		return 0
		
	i = 1
	while i < n and arr[i] <= x:
		i = i * 2
	
	return binarySearch( arr, i // 2, min(i, n-1), x)
	

arr = [10, 22, 23, 24, 33, 35]
n = len(arr)
x = 10
result = exponentialSearch(arr, n, x)
if result != -1:
	print("Element found at index", result)
else:
	print("Element not found")

