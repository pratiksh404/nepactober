def interpolationSearch(arr, low, high, x):

	if (low <= high and x >= arr[low] and x <= arr[high]):

		pos = low + ((high - low) // (arr[high] - arr[low]) * (x - arr[low]))

		if arr[pos] == x:
			return pos

		if arr[pos] < x:
			return interpolationSearch(arr, pos + 1, high, x)

		if arr[pos] > x:
			return interpolationSearch(arr, low, pos - 1, x)
	return -1


arr = [10, 22, 23, 24, 33, 35]
n = len(arr)

x = 22
index = interpolationSearch(arr, 0, n - 1, x)

if index != -1:
	print("Element found at index", index)
else:
	print("Element not found")

