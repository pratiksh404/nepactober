
import java.sql.*;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
public class Input extends JFrame implements ActionListener {
	JLabel lid,lname,lage;
	JTextField tid,tname,tage;
	Connection c;
	public Input(){
			lid = new JLabel("ID");
			tid = new JTextField(20);
			lname = new JLabel("Name");
			tname = new JTextField(30);
			lage = new JLabel("Age");
			tage = new JTextField(30);
			setLayout(new FlowLayout());
			add(lid);add(tid);
			add(lname);add(tname);
			add(lage);add(tage);
			JButton jb = new JButton("Click me");
			jb.addActionListener(this);
		add(jb);
}
	public void actionPerformed(ActionEvent ae){
		try{
		Connection c = DriverManager.getConnection("jdbc:mysql://localhost/college","root","");
		System.out.println("connected");
		Statement s = c.createStatement();
		int id = Integer.parseInt(tid.getText());
		String name = tname.getText();
		int age = Integer.parseInt(tage.getText());
		s.executeUpdate("insert into students values("+id+",'"+name+"',"+age+")");
		}catch(SQLException se){}
	}
	public static void main(String [] op){
		Input i = new Input();
		i.setSize(300,300);
		i.setVisible(true);
		
	}
	}

