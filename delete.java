import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;

public class JavaMysqlDelete
{

  public static void main(String[] args)
  {
    try
    {
      // create the mysql database connection
      String myDriver = "org.gjt.mm.mysql.Driver";
      String myUrl = "jdbc:mysql://localhost/test";
      Class.forName(myDriver);
      Connection conn = DriverManager.getConnection(myUrl, "root", "");
      
      // create the mysql delete statement.
      // i'm deleting the row where the id is "3", which corresponds to my
      // "Barney Rubble" record.
      String query = "delete from users where id = ?";
      PreparedStatement preparedStmt = conn.prepareStatement(query);
      preparedStmt.setInt(1, 3);

      // execute the preparedstatement
      preparedStmt.execute();
      
      conn.close();
    }
    catch (Exception e)
    {
      System.err.println("Got an exception! ");
      System.err.println(e.getMessage());
    }

  }
}