<%@page import="java.sql.*" %>
<%
    String name=request.getParameter("name");
    String ml=request.getParameter("email");
    String psd=request.getParameter("password");
    
    Class.forName("org.apache.derby.jdbc.ClientDriver");
    Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/tybp");
    Statement st = c.createStatement();
    String sql = " INSERT INTO users VALUES('"+name+"','"+ml+"','"+psd+"') ";
    st.executeUpdate(sql);
    out.println("Done!");
%>

