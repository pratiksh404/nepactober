#include<iostream>
using namespace std;

// Queue implementation using Arrays
// with basic functions like isempty,isfull,enqueue,dequeue,peek...


// queue class
class queue {
	// private data..
	
	
	int front = -1, rear = -1;
	int arr[20];
public:
	// public data..
	
	// empty queue check function
	bool isEmpty() {
		if (front == -1 && rear == -1)return true;
		else false;
	}
	// full queue check function
	bool isFull() {
		if ((front - rear) == 1 || (rear - front) == (20 - 1))return true;
		else false;
	}
	// enqueue operation function
	void enqueue(int x) {
		if (isEmpty()) {rear = 0; front = 0;}
		else if (isFull())return;
		else rear = (rear + 1) % 20;
		arr[rear] = x;
	}
	// dequeue operation function
	void dequeue() {
		if (isEmpty())return;
		else if (rear == front) {rear = -1; front = -1;}
		else front = (front + 1) % 20;
	}
	// return peek element of a queue
	int peek(){
		if(isEmpty())return 0;
		else return arr[rear];
	}
};

int main() {
	
	

	return 0;
}
