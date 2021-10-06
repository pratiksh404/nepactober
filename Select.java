import java.sql.*;
public class Select {
	public static void main(String[] args){
	try{
		Connection c= DriverManager.getConnection("jdbc:mysql://localhost/college","root","");
		System.out.println("connected");
		
		Statement s= c.createStatement();
		String  sql= "SELECT id,name,age FROM students WHERE id=1";
		ResultSet r= s.executeQuery(sql);
		while(r.next()){
			int id= r.getInt("id");
			String name=r.getString("name");
			int age=r.getInt("age");
			//display values
			System.out.println("ID:"+id);
			System.out.println("Name: "+name);
			System.out.println("Age: "+age);
		}
		r.close();
	}catch(SQLException se){
		
	}
	}

}
