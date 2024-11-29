# **Blepto: An E-Commerce Platform**

## **Overview**
Blepto is a robust and efficient e-commerce application tailored for online shopping in essential categories such as pharmacy, personal care, snacks, and cold drinks. Inspired by the Blinkit e-commerce model, Blepto offers users a seamless shopping experience with dynamic product displays, cart management, and a secure checkout process. The application is built using modern web technologies and backed by a structured MySQL database to ensure data integrity and scalability.

---

## **Features**
1. **User Registration and Login**:
   - Users can create accounts with encrypted passwords.
   - Secure authentication ensures data privacy.
   - Access personalized features like order history and cart management.

2. **Dynamic Product Browsing**:
   - Browse products across various categories: Pharmacy, Personal Care, Snacks, and Cold Drinks.
   - Dynamic content rendering ensures up-to-date inventory.

3. **Cart Management**:
   - Add products to the cart with real-time price calculations.
   - Modify quantities, remove items, or clear the cart before checkout.
---

## **File Structure**

The following file structure organizes Blepto for easy development and maintenance:

```
Blepto/
│
├── assets/                          
│   ├── css/
│   │   └── style.css                
│   ├── js/
│   │   └── script.js                
│   └── images/                      
│       ├── pharmacy/
│       ├── personal_care/
│       ├── snacks/
│       └── cold_drinks/
│
├── includes/                        
│   ├── header.php                   
│   ├── footer.php                   
│   └── db_connection.php           
│
├── categories/                     
│   ├── pharmacy.php                 
│   ├── personal_care.php           
│   ├── snacks.php                   
│   └── cold_drinks.php              
│
├── cart.php                         
├── checkout.php                     
├── index.php                        
├── login.php                        
├── signup.php                       
├── view_order.php                   
│
├── sql/                             
│   └── blepto.sql                  
│
├── README.md                        
```

---

## **Technologies Used**
### **Front-End**:
- **HTML**: For building a clean and intuitive structure.
- **CSS**: For styling and responsive design.
- **JavaScript**: To enhance interactivity and handle front-end logic.

### **Back-End**:
- **PHP**: For handling server-side logic, database interactions, and session management.

### **Database**:
- **MySQL**: A structured and scalable database system used to store:
  - User details
  - Product information
  - Orders and payment details
  - Relationships between entities

---

## **Setup Instructions**
### **Prerequisites**
1. Install [XAMPP](https://www.apachefriends.org/index.html) or any other server stack with PHP and MySQL support.
2. A web browser (e.g., Chrome, Firefox).
3. A code editor like VSCode or Sublime Text.

### **Steps**
1. Start your server environment (e.g., XAMPP).
2. Place the project files in the `htdocs` directory of XAMPP (or the appropriate folder for your server setup).
3. Import the database:
   - Open `phpMyAdmin`.
   - Create a new database named `blepto`.
   - Import the provided `blepto.sql` file into the database.
4. Configure the database connection:
   - Open `includes/db_connection.php`.
   - Update the database credentials (`host`, `username`, `password`, `dbname`) as per your environment.
5. Access the application:
   - Open a browser and navigate to `http://localhost/blepto`.

---

## **Usage**
### **For Users**:
1. Register and log in to access your account.
2. Browse through product categories.
3. Add products to your cart and proceed to checkout.
4. View order history and track your orders.

### **For Admins**:
1. Log in to the admin panel.
2. Manage inventory:
   - Add new products.
   - Update existing product details.
   - Delete products as necessary.

---

## **Future Enhancements**
1. **Search Functionality**: Allow users to search for products using keywords.
2. **User Reviews and Ratings**: Enable users to leave feedback for products.
3. **Advanced Filters**: Add sorting and filtering options (e.g., by price, category, or popularity).
4. **Order Tracking**: Include a real-time order tracking system for users.
5. **Mobile App Integration**: Develop a mobile version for enhanced accessibility.
---

## **Acknowledgments**
- Inspired by Blinkit, a leading e-commerce platform.
---

## Screenshots of the webpage
Please click on the drive link for the screenshots of the website (https://drive.google.com/drive/folders/1rOmHsbeUHXU7WdMv0wxIqi4pK5jnMTIb?usp=sharing)
