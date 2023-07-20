
/*
 * Checked: July 20, 2023
 */
// Shaira A. Abdula
public class StrongNumber{
	
	static int TotalOfFactorial = 0;
	
	public static void main (String[] args) {
		
		String originalNum = "146";
		String origNum[] = originalNum.split("");
		
        for (String num : origNum) {
        	TotalOfFactorial += getFactorial(Integer.parseInt(num));
        }
        
        System.out.println(StrongNum(originalNum));
	}
	
	static boolean StrongNum(String input) {
		if(Integer.parseInt(input) == TotalOfFactorial)
			return true;
		return false;
	}
		
	static int getFactorial(int input) {
		int factorial =1;
			
			for (int y = input; y > 0; y--) {
		        factorial *= y;
	      }	
		return factorial;
	}	
}
