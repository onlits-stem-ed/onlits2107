package local.onlits2107.experiment;

import java.sql.Statement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class LooselyCoupled {
    public static void main(String[] args) {
        // String url_mariadb = "jdbc:mariadb://localhost/crud_example_2107";
        String url_postgres = "jdbc:postgresql://localhost/onlits2107";
        String user = "onlits2107";
        String password = "onlits2107";
        try {
            Connection connection = DriverManager.getConnection(url_postgres, user, password);
            Statement statement = connection.createStatement();
            System.out.println(connection);
            System.out.println(statement);
            System.out.println("Aal is well!");
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
}
