import java.io.*;
 class binary_sum
 {
     String binary(long h)
     {
         String r="";
         while(h>0)
         {
             long d=h%2;
             r=d+r;
             h=h/2;
            }
            return(r);
     }       
     public static void main(String args[])throws Exception
      {
         BufferedReader br =new BufferedReader(new InputStreamReader(System.in));
         System.out.println("Enter Decimal Integers : ");
         System.out.print("m= ");
         long m=Long.parseLong(br.readLine());
         System.out.println();
         System.out.print("n= ");
         long n=Long.parseLong(br.readLine());
         System.out.println();
         if(m>0 && n>0)
         {
             binary_sum ob=new binary_sum();
             String str=ob.binary(m);
             String st=ob.binary(n);
             int l=str.length();
             int l1=st.length();
             if(l>l1)
             {
                 for(int i=1;i<=(l-l1);i++)
                 
                    st="0"+st;
                    
                 
                }
                else if(l1>l)
                {
                    for(int i=1;i<=(l1-l);i++)
                    
                        str="0"+str;
                    
                    
                }
             int k=str.length();
             String p="",t="";
             for(int i=(k-1);i>=0;i--)
             {
                 char ch=st.charAt(i);
                 char ch1=str.charAt(i);
                 if(ch=='0' && ch1=='0')
                 {
                     if(t=="")
                     {
                         p="0"+p;
                        }
                      else
                      {
                          p="1"+p;t="";
                        }
                }
                else if((ch=='0' && ch1=='1')||(ch=='1' && ch1=='0'))
                {
                    if(t=="")
                    {
                        p="1"+p;
                    }
                    else
                    {
                        p="0"+p;t="1";
                    }
                }
                else if(ch=='1' && ch1=='1')
                {
                    if(t=="")
                    {
                        p="0"+p;t="1";
                    }
                    else
                    {
                        p="1"+p;t="1";
                    }
                }
            }
            p=t+p;
                System.out.println("Binary of "+m+" = "+ob.binary(m));
                System.out.println("Binary of "+n+" = "+ob.binary(n));
                System.out.println("Sum of "+ob.binary(m)+" and "+ob.binary(n)+" = "+p);
            }
        else
        
            System.out.println("Decimal numbers must be more than zero.");
           
      }

   }  
     
