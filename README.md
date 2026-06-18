# OnlineMarketPlace

An online classifieds marketplace built for **DoneDeal Online Business**, a fictional online business based in Malawi. The platform allows users to list products for sale, browse listings by category, comment and leave reviews, and request quotations on items - recreating the core mechanics of a real-world classifieds platform such as DoneDeal.ie.

This project was developed as my final project for the **Level 5 Diploma**.

## Overview

The platform is built around a simple but complete marketplace workflow: a registered user creates an advertisement for a product, attaches images, and assigns it to a category. Other users can browse listings, leave comments and reviews, and generate a quotation for an item they're interested in. An admin account manages the platform's reports and oversight.

## Features

- **User accounts** - registration and login, with user details (name, phone number, email) stored against every listing, comment, and review they create
- **Product listings (advertisements)** - create listings with brand, product name, price, category, and description
- **Image uploads** - attach one or more images to each advertisement
- **Comments** - users can comment on listings, with each comment tied to the advertisement and the commenting user
- **Reviews** - users can leave reviews, stored independently of individual listings
- **Quotations** - generate a quotation document for an advertisement, recording the brand, make, and total price
- **Payments** - record a payment against a completed advertisement
- **Admin reporting** - generated reports are tracked and stored by the admin

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL (schema managed and exported via phpMyAdmin)
- **Frontend:** HTML/CSS

## Database Schema

The application is backed by a MySQL database (`project`) with the following tables:

| Table | Purpose |
|---|---|
| `users` | User accounts (name, phone, email, password, registration date) |
| `advertisement` | Product listings (brand, product name, price, description, category, owner) |
| `advertimages` | Images attached to each advertisement |
| `advertcomments` | Comments left on advertisements |
| `reviews` | User-submitted reviews |
| `quotation` | Generated quotations for advertisements |
| `payment` | Payments recorded against advertisements |
| `report` | Admin-generated reports |

The full schema, including table definitions and relationships, is available in [`project.sql`](./project.sql).

## Getting Started

### Prerequisites

- A local PHP environment (e.g. XAMPP, WAMP, or MAMP)
- MySQL / MariaDB with phpMyAdmin
- A web server (e.g. Apache) capable of running PHP

### Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/MohammadTahaNadwi/OnlineMarketPlace.git
   ```
2. Place the `Project` folder inside your local server's web root (e.g. `htdocs` for XAMPP).
3. Create a new MySQL database and import the schema:
   ```bash
   mysql -u root -p < project.sql
   ```
   Or import `project.sql` directly through phpMyAdmin.
4. Update the database connection details in the project's configuration file to match your local MySQL credentials.
5. Start your local server (e.g. Apache and MySQL via XAMPP) and navigate to the project folder in your browser.

> **Note:** This repository was built as an academic project and was not designed for production deployment. Database credentials are configured for a local development environment by default, and admin credentials are not stored securely. If adapting this project for any real-world or public use, replace any hardcoded credentials and implement proper password hashing before deployment.

## Project Context

This project was completed as the final project for the **Level 5 Diploma** programme, demonstrating practical application of database design, server-side scripting, and full-stack web development for a real-world business use case.

## Author

**Mohammad Taha Nadwi**
GitHub: [@MohammadTahaNadwi](https://github.com/MohammadTahaNadwi)
