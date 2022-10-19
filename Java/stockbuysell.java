import java.util.Scanner;

public class StockBuySell {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);

		System.out.println("Enter the size of array");
		int a = sc.nextInt();
		int[] arr = new int[a];

		System.out.println("Enter the array");

		for (int i = 0; i < a; i++) {
			arr[i] = sc.nextInt();
		} 
		
//		int maxPro = 0;
//        for (int i = 0; i < arr.length; i++) {
//            for (int j = i + 1; j < arr.length; j++) {
//                if (arr[j] > arr[i]) {
//                    maxPro = Math.max(arr[j] - arr[i], maxPro);
//                }
//            }
//        }

		//better approach
		
		 int maxPro = 0;
		    int minPrice = Integer.MAX_VALUE;
		    for (int i = 0; i < arr.length; i++) {
		      minPrice = Math.min(minPrice, arr[i]);
		      maxPro = Math.max(maxPro, arr[i] - minPrice);
		    }
		
		System.out.println("max profit will be" + maxPro);

	}

}
