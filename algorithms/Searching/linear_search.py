'''
Linear Search algorithm - searches sequentially through a dataset to find the key
'''

arr = input("What is the dataset? ") # Should be input with no spaces, eg. 121743628
key = input("What is the key? ") # Should be single character, eg. 7

def LinearSearch(arrParam, keyParam):
    list(arrParam)
    if keyParam in arrParam:
        print("Found key: " + str(keyParam) + ", at index: " + str(arrParam.index(keyParam))) # Returns key found and index of key in dataset
    else:
        print("Key not found :(")

'''
The LinearSearch function will iterate through the dataset and compare the value to the key that needs to be found
If it has been found it will output the key and index
'''

LinearSearch(arr, key)