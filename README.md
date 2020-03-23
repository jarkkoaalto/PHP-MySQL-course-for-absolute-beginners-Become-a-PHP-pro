# PHP-MySQL-course-for-absolute-beginners-Become-a-PHP-pro ##

## What is a database? ##

What is data?

facts related to any onbject inconsideration. So if have data about yourself, you have a name, you have a age, height, weight and so on ...


What is a database?

Systemetic collection of data, but it is organized


What is a DBMS?
- Collection of programs
- Grant you access to the database
- MySQL of Oracle

What is MySQL
- Structured Qoury Language (SQL)
- Data definition
- Data updation
- Date retrieval
- User Admininstration

What is query?

Extract data from a database and formats it into a human readable form.

user table

```
CREATE TABLE users(
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) not null,
    password VARCHAR(255) not null
);
```

![](./images/login.png =200x100)
![](./images/register.png =200x100)
![](./images/home_logging_in.png =200x100)
![](./images/login_error.png =200x100)
