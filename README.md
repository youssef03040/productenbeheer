# Productenbeheer CRUD (PHP + MySQL)

Dit is een simpel **CRUD-project** (Create, Read, Update, Delete) gemaakt met **PHP en MySQL**.  
Het project laat zien hoe je een productenlijst kan beheren: producten toevoegen, bekijken, bewerken en verwijderen.  

## 📌 Functionaliteiten
- Producten toevoegen met naam, prijs en voorraad (Create)
- Overzicht van alle producten in een tabel (Read)
- Productgegevens bewerken (Update)
- Producten verwijderen (Delete)

## Database
   CREATE DATABASE shop_db;
   USE shop_db;

   CREATE TABLE products (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100) NOT NULL,
     price DECIMAL(10,2) NOT NULL,
     stock INT NOT NULL,
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );