import java.util.Scanner;

public class TrappingRainWater {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);

		System.out.println("Enter the size of array");
		int a = sc.nextInt();
		int[] arr = new int[a];

		System.out.println("Enter the array");

		for (int i = 0; i < a; i++) {
			arr[i] = sc.nextInt();
		}
		int n = arr.length;
		int left = 0, right = n - 1;
		int res = 0;
		int maxLeft = 0, maxRight = 0;
		while (left <= right) {
			if (arr[left] <= arr[right]) {
				if (arr[left] >= maxLeft) {
					maxLeft = arr[left];
				} else {
					res += maxLeft - arr[left];
				}
				left++;
			} else {
				if (arr[right] >= maxRight) {
					maxRight = arr[right];
				} else {
					res += maxRight - arr[right];
				}
				right--;
			}
		}

	}

}
