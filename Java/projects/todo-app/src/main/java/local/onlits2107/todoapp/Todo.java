package local.onlits2107.todoapp;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class Todo {
    private int id;
    private String name;
    private int status;

    private String url;
    private String userName;
    private String password;

    private Connection connection;
    private Statement statement;

    public void setId(int id) {
        this.id = id;
    }

    public int getId() {
        return id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }

    public void setStatus(int status) {
        this.status = status;
    }

    public int getStatus() {
        return status;
    }

    public Todo() {
        url = "jdbc:mariadb://localhost/todo_app_2107";
        userName = "onlits2107";
        password = "onlits2107";
        try {
            connection = DriverManager.getConnection(url, userName, password);
            statement = connection.createStatement();
        } catch (SQLException ex) {
            System.out.println(ex.toString());
        }
    }

    public void create() {
        String sql = "INSERT INTO todo(name, status) VALUES('" + name + "', 0)";
        try {
            statement.executeUpdate(sql);
        } catch (SQLException ex) {
            System.out.println(ex.toString());
        }
        System.out.println("Task created!");
    }

    public void update() {

    }

    public void delete() {

    }

    public void read() {

    }

    public void read(int id) {

    }
}
