package DBConnect;
import java.io.FileNotFoundException;
import java.io.PrintWriter;
import java.io.UnsupportedEncodingException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

public class Main {

	public static void main(String[] args) throws FileNotFoundException, UnsupportedEncodingException {
		// TODO Auto-generated method stub
		PrintWriter writer = new PrintWriter("report.txt", "UTF-8");
		try {
			  Class.forName("org.postgresql.Driver");              
			  Connection con = DriverManager.getConnection("jdbc:postgresql://ec2-50-19-254-63.compute-1.amazonaws.com:5432/dfn2tmpf2daa3m","ekbinnprcoylcz", "9b4cc1a2596cd7974516bd71bebdd04ee7daca4ecc48b4640de62d269aa1f87c");
			  System.out.println("Database is connected !");
			  PreparedStatement stmt= con.prepareStatement("SELECT * FROM USERS");
			  ResultSet Rs= stmt.executeQuery();
			  System.out.println("Show Record:");
			  while(Rs.next()) {
				  writer.println(Rs.getString(2));
			  }
			} catch (Exception e) {
				System.out.print("Do not connect to DB - Error:"+e);
			}
		writer.close();
	}

}
