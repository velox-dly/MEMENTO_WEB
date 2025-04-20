# Memento - Retail Store Debt Management System (webVersion)
![memento-2](https://github.com/user-attachments/assets/aab8b7dc-099d-4f98-a629-6485a454607f)

Memento is a simple web-based debt management system designed for small retail businesses such as "Sari-Sari" stores. It helps store owners keep track of customer debts efficiently. Users can add or update debtor records, manage essential store items, and let the system calculate totals automatically.

---

## 🤖 General Information

- This system is ideal for small business owners.
- It makes tracking and managing debts easier and more organized.
- Key features include debtor record management and automatic calculations for store items.

---

## 👾 Authors

- @velox-dly  
- @minggay  
- @athazee
- @jear
- @nikki

---

## 📃 Documentation
### **How to Import memento.sql in phpMyAdmin**
1. Open phpMyAdmin on your browser.
2. Click on New to create a new database (name it memento or any name you prefer).
3. After creating the database, click on its name in the left panel.
4. Go to the Import tab in the top menu.
5. Click Choose File and select the memento.sql file from your local machine.
6. Ensure the file format is set to SQL.
7. Click the **Go** button to import.
8. Once the import is successful, the tables and data will be ready for use.

**You can now run the system on your local server and start managing your store’s debts!**
### **SQL Error - `connect_user.php`**

If you encounter a connection error, please:

**Remove the password on the following files:**

- `connect.php`  
- `connect_user.php`  

Set the password field as:

```php
$password = "";
```
# 📌 Note
This project was originally developed as a course requirement back in college.

Since @velox-dly recently found this project, he plans to either fork this repository or create a new GitHub repo to build a more feature-rich version of Memento based on the original idea.

